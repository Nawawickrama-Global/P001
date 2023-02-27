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

    Route::get('/category', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'index'])->name('category');
    Route::post('/create-category', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'create'])->name('create-category');
    Route::delete('/delete-category/{category}/{id}', [App\Http\Controllers\Dashboard\Category\CategoryController::class, 'delete'])->name('delete-category');
    // -Coupon
    Route::view('/coupon', 'dashboard.coupon.main');
});
