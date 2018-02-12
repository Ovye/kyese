<?php

namespace App\Http\Controllers;

use App\Kyese\Supports\Assets;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.check');
    }

    public function index()
    {
        $this->assign['body'] = 'backend.dashboard.index';
        $this->assign['title'] = 'Dashboard - ' . auth()->user()->username;
        $this->assign['is_backend'] = true;

        return view('backend.wrapper', $this->assign);
    }
}
