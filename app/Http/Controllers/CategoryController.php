<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Pastikan model Category sudah dibuat

class CategoryController extends Controller
{
    /**
     * Menampilkan form tambah kategori
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('createCategory'); // resources/views/category/create.blade.php
    }

    /**
     * Menyimpan kategori baru ke database
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        // Simpan kategori
        Category::create([
            'name' => $validated['name'],
        ]);

        // Redirect dengan session success
        return redirect()->route('category.create')->with('success', 'Kategori berhasil ditambahkan!');
    }
    public function destroy($id)
{
    // Cari kategori
    $category = Category::findOrFail($id);

    // Hapus semua produk yang memiliki category_id ini
    $category->products()->delete();

    // Hapus kategori
    $category->delete();

    return redirect()->back()->with('success', 'Kategori dan semua produk di dalamnya berhasil dihapus!');
}

}
