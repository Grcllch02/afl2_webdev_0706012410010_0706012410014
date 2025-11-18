<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Tampilkan keranjang dari session
     */
    public function index()
    {
        // Ambil cart dari session (default empty array)
        $cart = session()->get('cart', []);
        
        // Hitung total
        $grandTotal = 0;
        foreach ($cart as $item) {
            $grandTotal += $item['price'] * $item['quantity'];
        }

        return view('keranjang', compact('cart', 'grandTotal'));
    }

    /**
     * Tambah produk ke keranjang
     */
    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        
        // Ambil cart dari session
        $cart = session()->get('cart', []);
        
        // Cek apakah produk sudah ada di cart
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // Tambah produk baru ke cart
            $cart[$productId] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image_url' => $product->image_url,
                'quantity' => 1
            ];
        }
        
        // Simpan kembali ke session
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }

    /**
     * Update quantity produk di keranjang
     */
    public function update(Request $request, $productId)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        
        return redirect()->route('keranjang')->with('success', 'Keranjang diupdate!');
    }

    /**
     * Hapus produk dari keranjang
     */
    public function remove($productId)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        
        return redirect()->route('keranjang')->with('success', 'Produk dihapus dari keranjang!');
    }

    /**
     * Kosongkan seluruh keranjang
     */
    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('keranjang')->with('success', 'Keranjang dikosongkan!');
    }
}