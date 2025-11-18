<?php

namespace App\Http\Controllers;

use App\Models\Category;
// mengambil data dari database melalui model lalu mengirimkannya ke view.
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index1()
    {
        $products = Product::latest()->take(6)->get();
        //Product:: = make modul product yg kehubung sm tabel products di database
        //latest buat urutin data dari yg terbaru ke yg lama berdasarkan kolom created_at
        //->get() buat ambil semua data produk dlm bntuk array of object
        return view('katalog',[
            'products' => $products 
        ]);
    }


    public function create()
    {
        // ambil semua kat untuk bisa pake di dropdown 
        $categories = Category::all();
        // lalu baru direct ke file tambah produk itu 
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

        // kalo misal admin tdk isi image brrti dia taruh null
        $imagePath = null;
        // kalo ada file yang dikirim dengan nama image yang di htmlnya 
        if ($request->hasFile('image')) {
            // kalo ada dia bakal ke simpan ke public/upload/products
            $imagePath = 'uploads/products/';
            // isi namanya pake waktunya dan getclientoriginalname itu untuk ambil nama asli dari file usernya 
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // simpan file image ke foldedr public 
            $request->image->move(public_path($imagePath), $imageName);
            // simpan database lengkap ke database 
            $imagePath .= $imageName;
        }

        //  buat dan simpan ke database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id, 
            'image_url' => $imagePath
        ]);

        return redirect()->route('katalogAdmin')->with('success', 'Produk berhasil ditambahkan!');
    }
}
