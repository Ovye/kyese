<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/21/2018
 * Time: 3:47 PM
 */

namespace App\Kyese\PreControllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\User;
use App\Models\PasswordRecoveryLogger;
use App\Models\UserSmsUnit;
use App\Kyese\Services\SmsService;
use App\Mail\RecoverPasswordMailable;

class ProcessPasswordRecovery
{
    public static function run(Request $request, Mailer $mailer, $ctrl)
    {
        $phoneEmail = $request->phone_email;
        $userByEmail = User::whereEmail($phoneEmail)->first();
        $userByPhone = User::wherePhone($phoneEmail)->first();

        $token = md5($phoneEmail . "recovery_token_for_kyese");
        $recoveryLog = new PasswordRecoveryLogger();
        $recoveryLog->recovery_status = 'pending';
        $recoveryLog->recovery_token = $token;

        if (true == $userByPhone) {

            // Get user sms unit balance
            $userUnit = UserSmsUnit::whereUserId($userByPhone->id)->first();
            $message = "Dear {$userByPhone->username},\n";
            $message .= "Kindly click " . url("recover-password/{$userByPhone->id}/phone_" . $token) . "/, to recover your password . \n\n -Kyese.com";

            // Check user sms account balance then, send sms to phone number
            if ($userUnit->balance > 2) {
                $sms = new SmsService();
                $sms->send([
                    'sender' => 'Kyese',
                    'message' => nl2br($message),
                    'to' => $userByPhone->phone
                ]);

                if ($sms) {
                    // Update user sms account
                    $balance = $userUnit->balance;
                    $userUnit->balance = ($balance - $sms->getResponse()->units_used);
                    $userUnit->save();

                    $recoveryLog->user_id = $userByPhone->id;
                    $recoveryLog->recovery_type = 'phone';
                    $recoveryLog->expired = time() + 3600; // set new expiration period (1hr)
                    $ctrl->findOrCreateRecoveryLog($recoveryLog);

                    $alert = "We've sent a reset link to your phone number. Please, click on it to continue.";
                    alert('_success', $alert);
                    alert('s', $alert);
                }
                else {
                    $alert = "Failed to send recovery link to [{$phoneEmail}]. Possibly, due to network or server error. Please try again.";
                    alert('_error', $alert);
                    alert('e', $alert);
                }
            }
            else {
                alert('e', "Failed to recover password by phone. <br><b>Reason:</b> <i>Low units</i>. Only [<b>{$userUnit->balance}</b> unit(s) remaining]. <br>Please buy more units to continue or use email instead.");
            }
        }
        elseif (true == $userByEmail) {
            $data['url'] = url("recover-password/{$userByEmail->id}/email_" . $token);
            $sender = $mailer->to($phoneEmail)->send(new RecoverPasswordMailable($data));

            if (is_null($sender)) {
                $recoveryLog->user_id = $userByEmail->id;
                $recoveryLog->recovery_type = 'email';
                $recoveryLog->expired = time() + 3600;
                $ctrl->findOrCreateRecoveryLog($recoveryLog);

                alert('s', "Password recovery mail sent to your inbox. Open your email, click recover now to continue.");
            }
        }
        else {
            alert('_error', "No matched account for <b>{$phoneEmail}</b>. Please try again.");
        }

        return back()->withInput();
    }

    public static function verifyRecoveryToken(Request $request)
    {
        $explodedToken = explode('_', $request->token);
        $userId = $request->user_id;
        if (count($explodedToken) > 1) {
            $type = $explodedToken[0];
            $recoveryToken = $explodedToken[1];

            $userLog = PasswordRecoveryLogger::where('user_id', '=', $userId)
                ->where('recovery_type', '=', $type)
                ->where('recovery_token', '=', $recoveryToken)->first();
            if ($userLog) {
                $userLog->recovery_status = 'completed';
                $userLog->save();

                if ($userLog->recovery_type == $type && $userLog->recovery_token == $recoveryToken) {
                    $user = User::whereId($userId)->first();
                    $user->password = bcrypt($request->password);
                    if ($user->save()) {
                        alert('_success', "Your password reset was successful. Please login to continue!");
                    }
                }
                else {
                    alert('_error', "Unexpected server error occured. Please, try again later!");
                }
            }
        }
        else {
            alert('_error', "Suspicious action detected. Url not valid. Please, try again!");
        }

        return redirect('login');
    }
}