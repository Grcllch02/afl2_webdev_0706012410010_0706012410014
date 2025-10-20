<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        // READ: Ambil data cart dari database (user_id = 1 untuk demo)
        $cartItems = Cart::with('product')->where('user_id', 1)->get();
        
        // Hitung total
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }
        
        return view('keranjang', compact('cartItems', 'total'));
    }
}