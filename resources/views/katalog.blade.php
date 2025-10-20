{{-- @extends("Layout.mainlayout")
@section("title", "Katalog_Megaria_Sport")
@section("katalogActive", "active")
@section("content")

@endsection --}}

@extends('Layout.mainlayout')

@section('title', 'Katalog Produk')

@section('content')
<div class="text-center mb-5 p-5 text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px;">
    <h1 class="display-4 fw-bold">Katalog Produk</h1>
    <p class="lead">Temukan peralatan olahraga terbaik untuk kebutuhan Anda</p>
    <p>Selamat datang, buelizbaik!</p>
</div>

@foreach($categories as $category)
<div class="mb-5">
    <h3 class="mb-4">{{ $category->name }}</h3>
    <div class="row">
        @foreach($category->products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <span class="badge bg-success position-absolute m-2">Tersedia</span>
                    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="text-muted mb-2">Stok: {{ $product->stock_quantity }} unit</p>
                    <p class="h5 text-primary mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <button class="btn btn-primary w-100">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection