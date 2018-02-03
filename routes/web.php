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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/work','HomeController@work')->name('work');
Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/ip', function () {
    $ip= \Request::ip();
    $data = \Location::get($ip);
    dd($data);
});



Route::get('/ip', function () {
    $ip= \Request::ip();
    $data = \Location::get($ip);
    dd($data);
});



// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('login/google', 'Auth\LoginController@redirectToProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
