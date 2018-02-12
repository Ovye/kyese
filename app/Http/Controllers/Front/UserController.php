<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index($username)
    {
        $user = User::whereUsername($username)->first();
        if ($user) {
            return $user->username;
        }

        return view('404');
    }
}
