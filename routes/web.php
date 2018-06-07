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
    return view('pages.home');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('gallary', function () {
    return view('pages.gallary');
});

Route::get('disclaimer', function () {
    return view('pages.disclaimer');
});

Route::get('download', function () {
    return view('pages.download');
});


Route::get('register', 'RegistrationController@create');
Route::get('login', 'SessionsController@create');
