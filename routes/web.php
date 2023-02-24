<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
//Authentication
Route::view('/login','authentication.login');
Route::view('/register', 'authentication.register');
Route::view('/forget-password', 'authentication.forget-password');
Route::view('/reset-password', 'authentication.reset-password');
Route::view('/verify-account', 'authentication.verify-account');