<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ProductController::class, 'index'])->middleware('auth')->name('addProduct');
Route::get('/product/{id}', [ProductController::class, 'show'])->middleware('auth')->name('detailProduct');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('authLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('signup');
