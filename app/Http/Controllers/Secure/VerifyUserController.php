<?php

namespace App\Http\Controllers\Secure;

use App\Kyese\Services\SmsService;
use App\Mail\VerifyEmailMailable;
use App\Models\UserVerification;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;

class VerifyUserController extends Controller
{
    protected $user;
    protected $verificationCode;
    protected $request;
    protected $token;
    protected $alert;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function showForm($userToken)
    {
        $token = explode('::', $userToken);
        $this->token = $token[1];
        $this->request->type = $token[0];

        $userVerifications = UserVerification::whereToken($this->token)->first();
        if (false == $userVerifications) {
            $message = "<b>Invalid token detected.</b> Try to login to see if you are already verified.";
            alert('_error', $message);

            return $this->redirect('login');
        }

        $this->user = User::whereId($userVerifications->user_id)->first();
        $this->request->user_id = $this->user->id;
        $this->verificationCode = $userVerifications->code;

        $this->assign['userId'] = $this->user->id;
        $this->assign['type'] = $this->request->type;
        $this->assign['user'] = $this->user;
        $this->assign['is_front'] = true;
        $this->assign['token'] = $this->token;
        $this->assign['only_body'] = true;
        $this->assign['body'] = 'auths.verifier';

        return view('wrapper', $this->assign);
    }

    public function runVerifications(Request $request, Mailer $mailer)
    {
        $this->request = $request;
        if ($request->type == 'email') {
            return false == $this->verifyEmail($mailer)
                ? back() : redirect('login');
        }
        else {
            return false == $this->verifyAccount()
                ? back()->withInput() : redirect('login');
        }
    }

    public function verifyAccount()
    {
        $verifications = $this->getUserVerifications();
        $userVerifications = $this->getUserVerifications(true);
        dd($this->request);
        if ($userVerifications->code != $this->request->verification_code) {
            alert('_error', "Invalid verification provided. Please, try check and try again!");
        }

        if ($userVerifications) {
            if ($this->request->verification_code == $userVerifications->code
                && time() < $userVerifications->expired
                && $verifications->account == 0 || $verifications->phone == 0
            ) {
                $alertMsg = "Your account verification by phone number was successful. Please login to continue.";
                alert('_success', $alertMsg);
                $this->updateUserVerifications(['account' => 1, 'phone' => 1]);

                return true;

            }
            if ($verifications->account == 0 || $verifications->phone == 0
                && $this->request->verification_code != $userVerifications->code
                || $verifications->account == 0 || $verifications->phone == 0
                && time() > $userVerifications->expired) {
                $errorMsg = "Invalid or expired code provided. Please, try again or click send again below to get a new code. ";
                alert('e', $errorMsg);
                alert('_error', $errorMsg);
            }
            if ($verifications->phone == 1 && $verifications->account == 1
                && $this->request->verification_code == $userVerifications->code) {
                alert('i', "Sorry. Your account is already verified by phone. <br/><br/><a href='" . url('login') . "' class='btn btn-sm btn-framed main-color'>Click here to to login</a>");
            }
        }

        return false;

    }

    public function verifyEmail(Mailer $mailer)
    {
        $verifications = $this->getUserVerifications();
        $userVerifications = $this->getUserVerifications(true);
        if ($verifications) {
            if ($this->request['resend-link']) {
                return $this->resendVerificationLink($mailer);
            }

            if ($verifications->email == 0
                && $this->request->token == $userVerifications->token
                && time() < $userVerifications->expired) {
                $this->updateUserVerifications(['email' => 1]);

                return true;
            }
            else {
                alert('e', "Invalid or expired token provided. Please, click resend verification link button below to get a new token.");
            }

        }

        return false;
    }

    public function getUserVerifications($verificationData = false)
    {
        return UserVerification::getVerifications($this->request->user_id, $verificationData);
    }

    public function updateUserVerifications(array $data)
    {
        return UserVerification::updateVerifications($this->request->user_id, $data);
    }

    public function resendVerificationLink(Mailer $mailer)
    {
        $userId = $this->request->user_id;
        $token = $this->request->token;

        $user = User::whereId($userId)->first();
        $userVerifications = $this->getUserVerifications(true);

        if ($token == $userVerifications->token && $userId == $userVerifications->user_id) {
            $data['url'] = url("verify-email/{$user->id}_{$token}");
            $data['userFname'] = $user->fname;
            $sendEmail = $mailer->to($user->email)->send(new VerifyEmailMailable($data));

            if (is_null($sendEmail)) {
                alert('_success', "New verification link sent to your email address. Please, follow the link to verify your email.");
                $userVerifications->expired = time() + 3600;
                $userVerifications->save();

                return true;
            }

            alert('_error', "Failed to send new email verification link to you. Please, try again later!");
        }
        else {
            alert('_error', "Invalid token detected. Try to login again.");
        }

        return false;
    }

    public function verifyUserEmail($credentials)
    {
        $exploded = explode('_', $credentials);
        if (count($exploded) > 1) {
            $userId = $exploded[0];
            $token = $exploded[1];

            $this->request->user_id = $userId;
            $this->request->token = $token;
            $userVerifications = $this->getUserVerifications(true);

            if ($userVerifications && $token == $userVerifications->token) {
                if (time() > $userVerifications->expired) {
                    alert('_error', "This verification link has expired. Resend a new one.");

                    return $this->redirect("verify-user/email::{$token}");
                }

                $this->updateUserVerifications(['email' => 1]);
                alert('_success', "Your email address is now verified. Please, login to continue!");
            }
        }
        else {
            alert('_error', "Invalid verification token detected. Please, click the link in your email again or try to login.");
        }

        return $this->redirect('login');
    }

    public function resendVerificationCode(Request $request)
    {
        $this->request = $request;
        $this->request->user_id = $request->user_id;
        $this->request->token = $request->token;

        $user = User::whereId($request->user_id)->first();
        $userVerifications = $this->getUserVerifications(true);

        $code = random_numbers(6);
        if ($user) {
            $message = "Dear {$user->fname},\n";
            $message .= "Your verification code is {$code}. This will expire after 1 hour. \n\n";
            $message .= "-Kyese.com";

            // Check verification code request times
            if ($userVerifications->code_request_times >= 10) {
                alert('_error', "You've exceeds your code request times. Please, contact our support team for help.");

                return back();
            }

            $sms = SmsService::dispatch([
                'sender' => "Kyese",
                'to' => $user->phone,
                'message' => nl2br($message)
            ]);

            if ($sms) {
                alert('_success', "New verification code sent to your phone number. Enter it on the field above to continue.");
                $userVerifications->code = $code;
                $userVerifications->expired = time() + 3600;
                $userVerifications->code_request_times = ($userVerifications->code_request_times + 1);
                $userVerifications->save();
            }
            else {
                alert('_error', "Sending new verification code to your phone failed. Please, try again!");
            }
        }

        return back();
    }
}
