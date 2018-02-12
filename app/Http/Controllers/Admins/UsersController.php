<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.check');
    }

    public function index()
    {
        $this->assign['body'] = 'backend.users.index';
        $this->assign['title'] = "Users";
        return view('backend.wrapper', $this->assign);
    }
}
