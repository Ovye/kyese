<?php

namespace App\Http\Controllers\Secure;

use App\Http\Controllers\Controller;
use App\Kyese\PreControllers\ProcessUserLogin;
use App\Kyese\Supports\Assets;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth.true');
	}

	public function showForm()
	{
		$this->assign['title'] = 'Account Login';
		$this->assign['body'] = 'auths.login-form';
		$this->assign['scripts'] = Assets::js([
			'views' => [ 'auths/scripts' ]
		]);
		$this->assign['styles'] = Assets::css([
			'views' => ['auths/styles']
		], 1.0);
		$this->assign['only_body'] = true;
		$this->assign['is_front'] = true;

		return view('wrapper', $this->assign);
	}

	/**
	 * @param Request $request
	 * @return mixed;
	 */

	public function doLogin(Request $request)
	{
		return (new ProcessUserLogin)->run($request);
	}

	/**
	 * @param $provider string
	 * @return mixed
	 */

	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	public function redirectToProviderCallback(Request $request, $provider)
	{
		return ProcessUserLogin::runSocialiteRedirectCallback($request, $provider);
	}

	public function getSocial(Request $request)
	{
		$user = Socialite::driver('facebook')->userFromToken($request->session()->get('facebook_social_token'));
		echo $user->getId();
	}
}
