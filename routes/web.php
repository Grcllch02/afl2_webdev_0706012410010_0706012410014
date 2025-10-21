<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route::get('/tentangkami', function () {
//     return view('tentangkami');
// })->name('tentangkami');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');

Route::get('/profile', [UserController::class, 'index'])->name('profile');