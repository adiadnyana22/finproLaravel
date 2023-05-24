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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

Route::get('/search', [\App\Http\Controllers\ProductController::class, 'search'])->name('searchProduct');

Route::get('/category/{categoryId}', [\App\Http\Controllers\ProductController::class, 'category'])->name('categoryProduct');

Route::get('/product/{productId}', [\App\Http\Controllers\ProductController::class, 'detail'])->name('detailProduct');

Route::middleware(['isGuest'])->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login-method', [\App\Http\Controllers\AuthController::class, 'loginMethod'])->name('loginMethod');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register-method', [\App\Http\Controllers\AuthController::class, 'registerMethod'])->name('registerMethod');
});

Route::middleware(['isLogin'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\AccountController::class, 'profile'])->name('profile');

    Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::middleware(['isAdmin'])->group(function () {
        Route::get('/manage', [\App\Http\Controllers\ManageProductController::class, 'index'])->name('manageProduct');

        Route::get('/manage/add', [\App\Http\Controllers\ManageProductController::class, 'add'])->name('addProduct');
        Route::post('/manage/add-method', [\App\Http\Controllers\ManageProductController::class, 'addMethod'])->name('addProductMethod');

        Route::get('/manage/edit/{product}', [\App\Http\Controllers\ManageProductController::class, 'edit'])->name('editProduct');
        Route::put('/manage/edit-method/{product}', [\App\Http\Controllers\ManageProductController::class, 'editMethod'])->name('editProductMethod');

        Route::delete('/manage/delete-method/{product}', [\App\Http\Controllers\ManageProductController::class, 'deleteMethod'])->name('deleteProductMethod');
    });

    Route::middleware(['isUser'])->group(function () {
        Route::get('/cart', [\App\Http\Controllers\OrderController::class, 'cart'])->name('cart');
        Route::delete('/cart/delete-method/{cart}', [\App\Http\Controllers\OrderController::class, 'deleteCart'])->name('deleteCart');

        Route::post('/add-to-cart', [\App\Http\Controllers\OrderController::class, 'addToCart'])->name('addToCart');

        Route::post('/purchase', [\App\Http\Controllers\OrderController::class, 'purchase'])->name('purchase');

        Route::get('/history', [\App\Http\Controllers\OrderController::class, 'history'])->name('history');
    });
});
