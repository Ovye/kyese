<?php
use Illuminate\Support\Facades\Route;

// Login & password recovery
Route::get('/login', 'Secure\LoginController@showForm')->name('account.login');
Route::post('/login', 'Secure\LoginController@doLogin')->name('do.login');
Route::post('login/recover-password', 'Secure\RecoverPasswordController@index')->name('recover.password');
Route::get('recover-password/{userId}/{token}', 'Secure\RecoverPasswordController@recoveryForm')->name('new.password.form');
Route::post('change-password', 'Secure\RecoverPasswordController@saveNewPassword')->name('verify.new-password');
Route::post('logout', 'Secure\LogoutController@doLogout');
// Social Sign In & register
Route::get('/login/social/{driver}', 'Secure\LoginController@redirectToProvider');
Route::get('/login/social/{driver}/callback', 'Secure\LoginController@redirectToProviderCallback');
Route::get('/register', 'Secure\RegisterController@indexAction')->name('account.register');
Route::post('/register', 'Secure\RegisterController@doRegister')->name('account.doregister');
Route::get('checkIfPhoneExist', 'Secure\RegisterController@checkIfPhoneExist');
Route::get('checkIfEmailExist', 'Secure\RegisterController@checkIfEmailExist');

// Verify user data
Route::get('verify-user/{token}/', 'Secure\VerifyUserController@showForm');
Route::post('verify-user', 'Secure\VerifyUserController@runVerifications');
Route::get('verify-email/{userId_token}', 'Secure\VerifyUserController@verifyUserEmail');
Route::post('resend-code', 'Secure\VerifyUserController@resendVerificationCode')->name('resend.code');
