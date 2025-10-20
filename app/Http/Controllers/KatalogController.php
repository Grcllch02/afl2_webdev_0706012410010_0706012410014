<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        //Ambil semua kategori dengan produknya dari database
        $categories = Category::with('products')->get();
        return view('katalog', compact('categories'));
    }
}