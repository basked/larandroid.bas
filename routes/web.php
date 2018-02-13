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
Route::get('/cars', 'CarController@index');

Route::get('/', function () {
    return view('welcome');
});

// делаем admin panel
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/posts', function () {
    return view('admin.posts');
});
Route::get('/pages', function () {
    return view('admin.pages');
});
Route::get('/users', function () {
    return view('admin.users');
});

// GUZZLE
Route::get('brandGuzzle', 'BrandController@searchProductsByUrl');
Route::get('test', 'GuzzleController@test');
Route::get('parseCandylady', 'GuzzleController@parseCandylady');
Route::get('parseBelbazar', 'GuzzleController@parseBelbazar');