<?php

namespace App\Http\Controllers\Secure;

use App\Kyese\PreControllers\ProcessUserRegistration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
	public function indexAction()
	{
		$this->assign['only_body'] = true;
		$this->assign['body'] = 'secure.register';

		return view('wrapper', $this->assign);
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function doRegister(Request $request)
	{
		return ProcessUserRegistration::run($request);
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function checkIfPhoneExist(Request $request)
	{
		$user = User::wherePhone($request->phone)->first();
		if (count($user)) {
			return response()->json([ "Phone number already exist." ]);
		}

		return response()->json('true');
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function checkIfEmailExist(Request $request)
	{
		$user = User::whereEmail($request->email)->first();
		if (count($user)) {
			return response()->json([ "This email address is registered." ]);
		}

		return response()->json('true');
	}
}
