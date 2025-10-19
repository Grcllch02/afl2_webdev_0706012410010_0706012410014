<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Tampilkan semua data cart beserta relasinya (user & product)
     */
    public function index()
    {
        // Ambil semua cart dengan relasi user dan product
        $carts = Cart::with(['user', 'product'])->get();

        // Kirim data ke view
        return view('keranjang', compact('carts'));
    }
}
