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
        $carts = Cart::with(['user', 'product'])
            ->where('user_id', 2)
            ->get();

        // Kirim data ke view
        return view('keranjang', compact('carts'));
    }
}
