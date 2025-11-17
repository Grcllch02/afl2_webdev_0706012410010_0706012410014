<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route::get('/tentangkami', function () {
//     return view('tentangkami');
// })->name('tentangkami');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');

Route::get('/profile', [UserController::class, 'index'])->name('profile');

// Route::get('/tambahProduk')->name('tambahProduk');

Route::get('/tambahProduk', function () {
    return view('tambahProduk');
});
// Menampilkan form login
Route::get('/login', function () {
    return view('login'); // login.blade.php
})->name('login');

// Menangani submit login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Menampilkan form register
Route::get('/register', function () {
    return view('register'); // register.blade.php
})->name('register');

// Menangani submit register
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
