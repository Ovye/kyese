<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth.check', 'role:admin']], function () {

        Route::get('users', 'Admins\UsersController@index');

    });

    Route::get('role', function() {
        $user = \App\User::whereId(5)->first();
        if ($user) {
            dd(auth()->user()->hasRole('admin'));
        }

    });


});