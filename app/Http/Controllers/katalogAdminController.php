<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KatalogAdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        // Jika ada pencarian
        if ($request->has('search')) {
            $categories = Category::with([
                'products' => function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                }
            ])
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhereHas('products', function ($q) use ($search) {
                            $q->where('name', 'like', '%' . $search . '%');
                        });
                })
                ->paginate(5)
                ->withQueryString();

        } else {
            // Jika tidak ada pencarian
            $categories = Category::with('products')->paginate(5);
        }

        return view('katalogAdmin', compact('categories'));
    }
}
