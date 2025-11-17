<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index1()
    {
        $products = Product::latest()->take(6)->get();
        return view('katalog', [
            'products' => $products
        ]);
    }


    public function create()
    {
        $categories = Category::all();
        return view('tambahProduk', compact('categories'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar jika ada
        if ($product->image_url && file_exists(public_path($product->image_url))) {
            unlink(public_path($product->image_url));
        }

        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required',
        'image' => 'image|mimes:jpg,png,jpeg'
    ]);

    $product = Product::findOrFail($id);

    // Update normal fields
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category_id = $request->category_id;

    // Jika upload gambar baru
    if ($request->hasFile('image')) {
        $imageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move('uploads/products', $imageName);
        $product->image_url = 'uploads/products/' . $imageName;
    }

    $product->save();

    return redirect()->route('katalogAdmin')->with('success', 'Produk berhasil diupdate');
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = 'uploads/products/';
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path($imagePath), $imageName);
            $imagePath .= $imageName;
        }

        // SIMPAN KE DATABASE
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id, // ← WAJIB
            'image_url' => $imagePath
        ]);

        return redirect()->route('katalogAdmin')->with('success', 'Produk berhasil ditambahkan!');
    }
}
