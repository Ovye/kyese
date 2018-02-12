<?php

namespace App\Http\Controllers\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function __construct()
    {
        Auth::logout();
    }

    public function doLogout() {
        Auth::logout();
        return redirect('/login');
    }
}
