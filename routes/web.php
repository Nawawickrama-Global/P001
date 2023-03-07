<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return redirect()->route('home');
});

// Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('home');

    // Brand
    Route::get('/brand', [App\Http\Controllers\Dashboard\Brand\BrandController::class, 'index'])->name('brand');
    Route::post('/create-brand', [App\Http\Controllers\Dashboard\Brand\BrandController::class, 'create'])->name('create-brand');
    Route::delete('/delete-brand/{id}', [App\Http\Controllers\Dashboard\Brand\BrandController::class, 'delete'])->name('delete-brand');

    // Category
    Route::get('/category', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'index'])->name('category');
    Route::post('/create-category', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'create'])->name('create-category');
    Route::delete('/delete-category/{category}/{id}', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'delete'])->name('delete-category');

    // Coupon
    Route::get('/coupon', [App\Http\Controllers\Dashboard\Coupon\CouponController::class, 'index'])->name('coupon');
    Route::post('/create-coupon', [App\Http\Controllers\Dashboard\Coupon\CouponController::class, 'create'])->name('create-coupon');
    Route::delete('/delete-coupon/{id}', [App\Http\Controllers\Dashboard\Coupon\CouponController::class, 'delete'])->name('delete-coupon');

});

//site
Route::view('/customer-login', 'site.auth.login');
Route::view('/customer-registration', 'site.auth.registration');

//home
Route::view('/home', 'site.home.home');
Route::view('/cart', 'site.cart.cart');
Route::view('/product-add-cart', 'site.cart.product-add-cart');
Route::view('/product-list', 'site.cart.product-list');
Route::view('/single-product', 'site.cart.single-product');
Route::view('/contact', 'site.contact.main');
Route::view('/wishlist', 'site.cart.wishlist');
