<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/21/2018
 * Time: 2:43 PM
 */

namespace App\Kyese\PreControllers;

use App\Models\UserSmsUnit;
use App\Models\UserVerification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProcessUserLogin
{
	protected $authCredentials = [];
	protected $user = false;
	protected $userVerifications;
	protected $verificationType = 'default';
	protected $loginType;

	static function instance()
	{
		return new ProcessUserLogin();
	}

	public function run(Request $request)
	{
		$this->validateLoginWithEmail($request);
		$this->validateLoginWithPhone($request);
		$this->validateLoginWithUsername($request);

		if (false == $this->userVerificationStatus()) {
			return redirect("verify-user/{$this->verificationType}::{$this->userVerifications->token}/");
		}

		return $this->allowOrRefuseLogin($request);

	}

	public function userVerificationStatus()
	{
		$continue = true;
		$alert = '';

		if (true == $this->user) {
			$this->userVerifications = UserVerification::whereUserId($this->user->id)->first();
			$userVerifier = json_decode($this->userVerifications->verifications);

			if ($userVerifier->account == 0 && $this->loginType == 'username'
				|| $userVerifier->account == 0 && $this->loginType == 'phone')
			{
				$alert .= "Unverified account<br/>";
				$continue = false;
			}
			if ($userVerifier->email == 0 && $this->loginType == 'email') {
				$alert .= "Unverified email address<br/>";
				$continue = false;
				$this->verificationType = 'email';
			}
			if ($userVerifier->phone == 0 && $this->loginType == 'phone') {
				$alert .= "Unverified phone number";
				$continue = false;
			}

			if ($continue == false) {
				alert('e', "Sorry. We couldn't log you in because of... <br/>{$alert}");

				return false;
			}

			return $continue;
		}
		else {
			return back()->withInput();
		}

	}

	public static function runSocialiteRedirectCallback(Request $request, $provider)
	{
		if (true == self::socialiteHasErrors($provider))
			return redirect('/login');

		$user = Socialite::driver($provider)->user();
		$token = $user->token;

		//Set session
		$request->session()->put($provider . '_social_token', $token);
		if ($provider != 'twitter') {
			$newUser = Socialite::driver($provider)->userFromToken($token);
		}
		else {
			$newUser = $user;
		}

		DB::beginTransaction();

		try {
			$authUser = User::findOrCreateSocialUser($newUser, $provider);

			UserSmsUnit::findOrCreate($authUser);
			UserVerification::findOrCreate($authUser->id, [
				'code' => random_numbers(),
				'token' => bcrypt('__user_token__'),
				'expired' => time() + 3600,
				'status' => 1,
				'verifications' => [ 'account' => 0, 'email' => 0, 'phone' => 0 ]
			]);

			Auth::login($authUser, true);

			DB::commit();

			return redirect()->intended('/dashboard');

		}
		catch (\Exception $exception) {

			$error = "<b>Whoops!!</b>. We cound't log you in with " . ucfirst($provider) . " at the moment. Please try again. Let's know if it persist";

			alert('notify', [ 'type' => 'danger', 'message' => $error ]);
			alert('e', $error);

			DB::rollback();

			return redirect('/login');
		}
	}

	static function socialiteHasErrors($provider)
	{
		if ($provider == 'twitter' && get('denied') != ''
			|| $provider == 'facebook' && get('error') != ''
			|| $provider == 'facebook' && get('error_code') != '') {

			if (get('error_code')
				&& get('error_reason') != 'user_denied') {
				alert('notify',
					[
						'type' => 'info',
						'message' => 'Sorry for the error. Please try other options or click the facebook login later. Let us know if it persist.',
						'timer' => 10000
					]
				);
			}
			elseif (get('denied')
				|| get('error')
				&& get('error_reason') == 'user_denied') {
				alert('notify',
					[
						'type' => 'info',
						'message' => "We noticed you've just cancelled your social login for {$provider}. Know that you can always come back to use it when needed. You may login with your email, phone or username if you have an account with us.",
						'timer' => 10000
					]
				);
			}

			return true;
		}

		return false;
	}

	public function validateLoginWithEmail(Request $request)
	{
		$email = $request->user_name;
		$password = $request->password;

		$user = User::whereEmail($email)->first();

		if ($user) {
			$verify = password_verify($password, $user->password);
			if ($verify) {
				$this->authCredentials = [ 'email' => $email, 'password' => $password ];
				$this->user = $user;
				$this->loginType = 'email';
			}
		}

		return ($this->user);
	}

	public function validateLoginWithPhone(Request $request)
	{
		$phoneNumber = $request->user_name;
		$password = $request->password;

		$user = User::wherePhone($phoneNumber)->first();

		if ($user) {
			$verify = password_verify($password, $user->password);

			if ($verify) {
				$this->authCredentials = [ 'phone' => $phoneNumber, 'password' => $password ];
				$this->user = $user;
				$this->loginType = 'phone';
			}
		}

		return $this->user;
	}

	public function validateLoginWithUsername(Request $request)
	{
		$username = $request->user_name;
		$password = $request->password;

		$user = User::whereUsername($username)->first();

		if ($user) {
			$verify = password_verify($password, $user->password);
			if ($verify) {
				$this->authCredentials = [ 'username' => $username, 'password' => $password ];
				$this->user = $user;
				$this->loginType = 'username';
			}
		}

		return $this->user;
	}

	public function allowOrRefuseLogin(Request $request)
	{
		$rememberMe = $request->remember_me;
		$remember = false;
		if ($rememberMe == 'on') {
			$remember = true;
		}

		if (Auth::attempt($this->authCredentials, $remember)) {
			alert('notify',
				[ 'type' => 'success', 'message' => "We are happy to see you again. The possibilities are with you." ]
			);

			if ($request->after == '')
				return Redirect::to('/dashboard');

			return Redirect::to($request->after);
		}
		else {
			alert('notify', [
				'type' => 'danger',
				'message' => "We didn't find any matched records with these credentials."
			]);

			return back()->withInput();
		}
	}

}