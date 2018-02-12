<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManagerStatic as Image;

Route::get('/', 'Front\HomeController@index');

// Preview mailables
Route::get('/mailable', function () {
    $data['url'] = url('login/password-reset/'.bcrypt('remember_token'));
    return new \App\Mail\RecoverPasswordMailable($data);
});

Route::get('/units/{user_id}', 'Secure\RecoverPasswordController@units');

// Search routes
Route::post('/search', 'Search\QueryController@doSearch');

// usage inside a laravel route
Route::get('/image', function()
{
    $img = Image::make(asset('storage/sample.jpg'))->fit(500, 700)
        ->brightness(7)->contrast(6)
    ->text('The quick brown fox jumps over the lazy dog.', 10, 200, function($font) {
        $font->file(5);
        $font->size(54);
        $font->color('#fdf6e3');
    })->insert(asset('storage/watermark.png'), 'bottom-left', 10, 10);

    return $img->response('jpg');

});


/**
 * Let's access user account with username after kyese.com e.g @link http://kyese.com/josiah/
 * This will help show user details when you type kyese.com/{username}
 * e.g @link http://kyese.com/josiah, will get information about the username [josiah]
 * and asscoiate other models.
 * Note: This route is declared last because other routes won't work well if declared first.
 */

Route::get('/{user}', 'Front\UserController@index');