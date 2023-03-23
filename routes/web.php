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

// Admin Login Routes
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

// Dashboard Routes
Route::prefix('/admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('home');

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

    // Add Product
    Route::get('/add-product', [App\Http\Controllers\Dashboard\Product\ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/add-product', [App\Http\Controllers\Dashboard\Product\ProductController::class, 'addNewProduct'])->name('add-new-product');
    Route::get('/view-product', [App\Http\Controllers\Dashboard\Product\ProductController::class, 'viewProduct'])->name('view-product');
    Route::get('/delete-product/{id}', [App\Http\Controllers\Dashboard\Product\ProductController::class, 'deleteProduct'])->name('delete-product');

    // Attribute
    Route::get('/attribute', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'index'])->name('attribute');
    Route::post('/create-attribute', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'create'])->name('create-attribute');
    Route::delete('/delete-attribute/{id}', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'delete'])->name('delete-attribute');

    // Variation
    Route::get('/variations/{id}', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'variations'])->name('variations');
    Route::post('/create-variation', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'createVariation'])->name('create-variation');
    Route::delete('/delete-variation/{id}', [App\Http\Controllers\Dashboard\Attribute\AttributeController::class, 'deleteVariation'])->name('delete-variation');


    // Customer
    Route::get('/customer', [App\Http\Controllers\Dashboard\Customer\CustomerController::class, 'index'])->name('customer');
    Route::get('/delete-customer/{id}', [App\Http\Controllers\Dashboard\Customer\CustomerController::class, 'delete'])->name('delete-customer');
    Route::get('/edit-customer/{id}', [App\Http\Controllers\Dashboard\Customer\CustomerController::class, 'edit'])->name('edit-customer');
});

Route::middleware(['auth'])->group(function () {
    // Wish List
    Route::post('/add-to-wish', [App\Http\Controllers\Site\Wish\WishListController::class, 'addWishList'])->name('add-to-wish');
    Route::get('/wishlist', [App\Http\Controllers\Site\Wish\WishListController::class, 'wishList'])->name('wishlist');
    // Cart
    Route::post('/add-to-cart', [App\Http\Controllers\Site\Cart\CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('/cart', [App\Http\Controllers\Site\Cart\CartController::class, 'index'])->name('cart');
    Route::post('/remove-cart', [App\Http\Controllers\Site\Cart\CartController::class, 'removeFromCart'])->name('remove-cart');
    Route::post('/plus-qty', [App\Http\Controllers\Site\Cart\CartController::class, 'plusQty'])->name('plus-qty');
    Route::post('/minus-qty', [App\Http\Controllers\Site\Cart\CartController::class, 'minusQty'])->name('minus-qty');
    Route::post('/apply-coupon', [App\Http\Controllers\Site\Cart\CartController::class, 'applyCoupon'])->name('apply-coupon');
});


// Home routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

//site login
Route::get('/register', [App\Http\Controllers\Auth\CustomerRegistrationController::class, 'index'])->name('customer-registration');
Route::post('/register-customer', [App\Http\Controllers\Auth\CustomerRegistrationController::class, 'register'])->name('register-customer');
Route::view('/login', 'site.auth.login')->name('customer-login');

//home
Route::view('/product-add-cart', 'site.cart.product-add-cart');

Route::get('/shop', [App\Http\Controllers\Site\Product\ProductController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [App\Http\Controllers\Site\Product\ProductController::class, 'viewProduct'])->name('view-item');


Route::view('/contact', 'site.contact.main');
// Route::view('/wishlist', 'site.cart.wishlist');
Route::view('/add-cart', 'site.cart.product-add-cart');
Route::view('/why-us', 'site.why-us.main');
Route::view('/about-us', 'site.contact.about');
Route::view('/partners', 'site.partner.main');
Route::view('/checkout', 'site.cart.checkout');

//order
Route::view('/order-history', 'dashboard.order.view');
