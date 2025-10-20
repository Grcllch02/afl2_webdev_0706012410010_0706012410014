<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');
Route::get('/profil', [UserController::class, 'index'])->name('profil');


Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');