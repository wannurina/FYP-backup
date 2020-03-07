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
Route::get('/formStudent', function () {
    return view('formStudent');
});

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/successfully', function () {
    return view('successfully');
});
Auth::routes();
Route::get('/loginStaff','HomeController@loginStaff');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formStudent', 'HomeController@index')->name('formStudent');

Route::get('/loginStaff', function () {
    return view('loginStaff');
});
Route::get('/formStaff', function () {
    return view('formStaff');
});
