<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/pharmaceutical', [App\Http\Controllers\HomeController::class, 'pharmaceutical'])->name('pharmaceutical');
Route::get('/cosmetics-and-personal-care', [App\Http\Controllers\HomeController::class, 'cosmeticspersonalcare'])->name('cosmeticspersonalcare');
Route::get('/oil', [App\Http\Controllers\HomeController::class, 'oil'])->name('oil');
Route::get('/product-detail', [App\Http\Controllers\HomeController::class, 'productDetail'])->name('productDetail');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
