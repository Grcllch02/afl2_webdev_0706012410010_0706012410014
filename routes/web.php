<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KatalogAdminController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route::get('/tentangkami', function () {
//     return view('tentangkami');
// })->name('tentangkami');
Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');

Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');


Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/katalogAdmin', [KatalogAdminController::class, 'index'])
    ->name('katalogAdmin');

// Cart Routes (Session-based)
Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');
Route::post('/keranjang/add/{productId}', [CartController::class, 'add'])->name('cart.add');
Route::put('/keranjang/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/keranjang/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/keranjang/clear', [CartController::class, 'clear'])->name('cart.clear');

// Order Routes
Route::post('/orders/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{orderId}', [OrderController::class, 'show'])->name('orders.show');
Route::post('/orders/{orderId}/cancel', [OrderController::class, 'cancel'])->name('orders.cancel'); // ⭐ BARU, 'show'])->name('orders.show');

Route::get('/profile', [UserController::class, 'index'])->name('profile');

Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
// Route::get('/tambahProduk')->name('tambahProduk');

Route::get('/tambahProduk', function () {
    return view('tambahProduk');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

require __DIR__.'/auth.php';
