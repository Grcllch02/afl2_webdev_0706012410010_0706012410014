<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request; //ini buat input dr user (form)

class KatalogController extends Controller
{
    public function index()
    {
        //Ambil semua kategori dengan produknya dari database
        $categories = Category::with('products')->get();
        //Category:: → ambil data dari model Category, yang mewakili tabel categories di database.
        return view('katalog', compact('categories'));
    }
}