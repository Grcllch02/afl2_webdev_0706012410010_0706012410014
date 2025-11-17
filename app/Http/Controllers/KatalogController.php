<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        // dia simpan kata yang diinput dalam search
        $search = $request->search;
        // ngecek apakah user kirim parameter atau tidak (masukin search atau tidak)
        if ($request->has('search')) {
            // ambil produk yang sesuai dengan search 
            $categories = Category::with(['products' => function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            }])
                // setelah ambil produk yang sesuai dengan search, dia cek kategorinya lagi kalo sesuai dengan search juga mak aditampilkan 
                ->where(function ($query) use ($search) {
                    // Filter kategori berdasarkan nama
                    $query->where('name', 'like', '%' . $search . '%')
                        // atau kategori yang punya produk yang cocok
                        ->orWhereHas('products', function ($q) use ($search) {
                            $q->where('name', 'like', '%' . $search . '%');
                        });
                })

                // aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                // search cuman berdasarkan produk kalo ada baru tampilkan
                // ->whereHas('products', function($query) use ($search) {
                //     $query->where('name', 'like', '%' . $search . '%');
                // })
                // aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

                ->get();
            //Ambil semua kategori dengan produknya dari database
            // $categories = Category::with('products')->get();
            return view('katalog', compact('categories'));
        } else {
            // kalo tidak ada yang di search maka ditampilkan semuanya
            //Ambil semua kategori dengan produknya dari database
            $categories = Category::with('products')->get();
            return view('katalog', compact('categories'));
        }
    }
}
