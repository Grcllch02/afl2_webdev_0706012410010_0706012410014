<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');
Route::get('/profil', [UserController::class, 'index'])->name('profil');


