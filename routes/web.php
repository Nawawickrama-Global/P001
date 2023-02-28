<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Route::view('/register', 'authentication.register');
Route::view('/forget-password', 'authentication.forget-password');
Route::view('/reset-password', 'authentication.reset-password');
// Route::view('/verify-account', 'authentication.verify-account');

// Dashboard
Route::view('/dashboard', 'dashboard.main');
// -brand
Route::view('/brand', 'dashboard.brand.main');
// -category
Route::view('/category', 'dashboard.category.main');
// -Coupon
Route::view('/coupon', 'dashboard.coupon.main');

// -Add Product
Route::view('/add-product', 'dashboard.product.add');
Route::view('/view-product', 'dashboard.product.view');
//attribute
Route::view('/attribute', 'dashboard.attribute.main');