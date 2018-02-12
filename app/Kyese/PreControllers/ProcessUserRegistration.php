<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/21/2018
 * Time: 3:37 PM
 */

namespace App\Kyese\PreControllers;

use App\Kyese\Services\SmsService;
use App\Mail\VerifyEmailMailable;
use App\Models\UserVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserSmsUnit;
use Illuminate\Support\Facades\Mail;

class ProcessUserRegistration
{
	public static function run(Request $request)
	{
		$username = ucfirst($request->username);

		DB::begintransaction();

		try {
			$user = new User();
			$user->fname = $request->fname;
			$user->lname = $request->lname;
			$user->name = ucwords($request->fname . ' ' . $request->lname);
			$user->username = $username;
			$user->email = $request->email;
			$user->phone = $request->phone;
			$user->profile_type = '';
			$user->account_status = 1;
			$user->online_status = 0;
			$user->password = Hash::make($request->password);
			$user->save();

			UserSmsUnit::findOrCreate($user);

			$code = random_numbers(6);
			$token = bcrypt('__user_token__');

			UserVerification::findOrCreate($user->id, [
				'code' => $code,
				'token' => $token,
				'expired' => time() + 3600,
				'verifications' => [ 'account' => 0, 'email' => 0, 'phone' => 0 ]
			]);

            // Send verification code
            $message = "Dear " . ucfirst($user->fname) . ",\n";
            $message .= "Your account verification code is {$code}. This will expire after 1 hour. \n\n -Kyese.com";
            SmsService::dispatch([
			    'sender' => 'Kyese',
                'message' => nl2br($message),
                'to' => $user->phone
            ]);

            //Send verification link
            $data['url'] = url("verify-email/{$user->id}_{$token}");
            $data['userFname'] = $user->fname;
			Mail::to($user->email)->send(new VerifyEmailMailable($data));

			DB::commit();

			alert('i', "<b>Hi {$user->name},</b><br/><br/>Enter verification code sent to you to verify your account. Your username is <b>{$user->username}</b>.");
			alert('_success', "<b>Great!!</b> You are registered. Please verify your account to get started with kyese creations.");

			return redirect("verify-user/default::{$token}");

		}
		catch (\Exception $exception) {
			alert('_error', "<b>Whoops!!</b>. We are sorry but your account wasn't created at the moment. Please, try again. <b>Reasons:</b> {$exception->getMessage()}");

			DB::rollback();

			return back()->withInput();

		}
	}
}