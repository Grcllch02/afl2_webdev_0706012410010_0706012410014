<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KatalogAdminController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route::get('/tentangkami', function () {
//     return view('tentangkami');
// })->name('tentangkami');

Route::get('/katalogAdmin', [KatalogAdminController::class, 'index'])
    ->name('katalogAdmin');

Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');

Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');

Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');


// Category CRUD
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');



Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');

Route::get('/profile', [UserController::class, 'index'])->name('profile');


// Route::get('/tambahProduk')->name('tambahProduk');

// Route::get('/tambahProduk', function () {
//     return view('tambahProduk');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

require __DIR__.'/auth.php';
