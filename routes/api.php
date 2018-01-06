<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*bas марщрут регистрации*/
Route::post('register', 'Api\Auth\RegisterController@register');
//*bas маршрут Логина
Route::post('login', 'Api\Auth\LoginController@login');
//*bas маршрут обновления токена
Route::post('refresh', 'Api\Auth\LoginController@refresh');


Route::middleware('auth:api')->group(function () {
    //*bas маршрут удаления токена
    Route::post('logout', 'Api\Auth\LoginController@logout');
    Route::get('posts','Api\PostController@index' );
});
