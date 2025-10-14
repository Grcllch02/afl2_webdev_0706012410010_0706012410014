<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/profil', function () {
    return view('profil');
});

