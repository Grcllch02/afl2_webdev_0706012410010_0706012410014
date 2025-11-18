<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KatalogAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (Bisa diakses tanpa login)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tentang-kami', function () {
    return view('beranda');
})->name('tentang-kami');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');

/*
|--------------------------------------------------------------------------
| GUEST ROUTES (Hanya untuk yang belum login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES (Harus login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // ========== KERANJANG ==========
    Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');
    Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    
    // ========== ORDERS ==========
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
    Route::get('/orders/{orderId}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/{orderId}/cancel', [OrderController::class, 'cancel'])->name('orders.cancel');
    
    // ========== PROFILE ==========
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Harus login sebagai admin)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Katalog Admin
    Route::get('/katalogAdmin', [KatalogAdminController::class, 'index'])->name('katalogAdmin');
    
    // Product Management
    Route::get('/tambahProduk', [ProductController::class, 'create'])->name('tambahProduk');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});