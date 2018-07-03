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
})->name('home');

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

Route::get('app/dashboard', 'AppController@index')->name('dashboard');
Route::get('app/pin', 'PinsController@index')->name('my_pin');
Route::get('app/pin/recived', 'PinsController@recived')->name('recived_pin');

Route::get('app/pin/request', 'PinsController@request')->name('request_pin');
Route::post('app/pin/request', 'PinsController@post_request')->name('post_request_pin');

Route::get('app/pin/transfer', 'PinsController@transfer')->name('transfer_pin');
Route::post('app/pin/transfer', 'PinsController@post_transfer')->name('post_transfer_pin');

Route::get('app/pin/generate', 'PinsController@generate')->name('generate_pin');
Route::post('app/pin/generate', 'PinsController@post_generate')->name('post_generate_pin');

Route::get('app/direct_income', 'AppController@direct_income')->name('direct_income');
Route::get('app/reward_income', 'AppController@reward_income')->name('reward_income');
Route::get('app/total_payout', 'AppController@total_payout')->name('total_payout');


Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');

Route::get('logout', 'SessionsController@destroy');