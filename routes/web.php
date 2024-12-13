<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
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




Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});



Route::middleware(['auth', 'must-admin'])->group(function () {

    Route::controller(ProductController::class)->group(function () {

        Route::get('/product/create', 'create')->name('product.create');
        Route::post('/product/create', 'store')->name('product.store');

        Route::get('/product/{id}/edit', 'edit')->name('product.edit');
        Route::put('/product/{id}/edit', 'update')->name('product.update');

        Route::delete('/product/{id}/delete', 'destroy')->name('product.destroy');
    });

    Route::controller(CategoryController::class)->group(function () {

        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/create', 'store')->name('category.store');

        Route::get('/category/{id}/edit', 'edit')->name('category.edit');
        Route::put('/category/{id}/edit', 'update')->name('category.update');

        Route::delete('category/{id}/delete', 'destroy')->name('category.destroy');
    });

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/transaction', 'index')->name('transaction.index');
        Route::get('/transaction/{id}', 'show')->name('transaction.detail');
    });
});

Route::middleware(['auth', 'must-member'])->group(function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/add_cart/{id}', [CartController::class, 'addCart'])->name('cart.add');
    Route::delete('/cart/{id}/delete', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}/detail', [ProductController::class, 'show'])->name('product.detail');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.products');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
