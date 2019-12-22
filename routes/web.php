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
    return view('sign-up');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/gallery1', function () {
    return view('gallery1');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/confirmBooking', function () {
    return view('confirmBooking');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::POST('/insert', 'bookingController@insert');

Route::POST('/sendMessage', 'messageController@sendMessage');