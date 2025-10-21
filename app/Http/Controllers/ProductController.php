<?php

namespace App\Http\Controllers;
// mengambil data dari database melalui model lalu mengirimkannya ke view.
use App\Models\Product;

class ProductController extends Controller
{

    public function index1()
    {
        $products = Product::latest()->get(); 
        //Product:: = make modul product yg kehubung sm tabel products di database
        //latest buat urutin data dari yg terbaru ke yg lama berdasarkan kolom created_at
        //->get() buat ambil semua data produk dlm bntuk array of object
        return view('katalog',[
            'products' => $products 
        ]);
    }
    
}