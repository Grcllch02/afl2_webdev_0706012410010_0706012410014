<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    public function index1()
    {
        $products = Product::latest()->take(6)->get(); 
        return view('katalog',[
            'products' => $products 
        ]);
    }
    
}