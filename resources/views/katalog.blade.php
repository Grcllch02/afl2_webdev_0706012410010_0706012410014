@extends('Layout.mainlayout')
@section('title', 'Katalog Produk')
@section('katalogActive', 'active')

@section('content')
    <div class="container my-5">
        {{-- Search Form --}}
        <form action="/katalog" method="GET" class="form-inline w-25 d-flex gap-2 mb-4">
            <input type="search" placeholder="Search" name="search" class="form-control">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>

        {{-- Header Banner --}}
        <div class="text-center mb-5 p-5 text-white"
            style="background: linear-gradient(135deg, #0d6efd 0%, #764ba2 100%); border-radius: 15px;">
            <h1 class="display-4 fw-bold">Katalog Produk</h1>
            <p class="lead">Temukan peralatan olahraga terbaik untuk kebutuhan Anda</p>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Looping Kategori --}}
        @foreach ($categories as $category)
            <div class="mb-5">
                <h2 class="mb-4 display-6 border-bottom pb-2">{{ $category->name }}</h2>
                <div class="row g-4">
                    {{-- Looping Produk di dalam Kategori ini --}}
                    @forelse($category->products as $product)
                        <div class="col-md-4 col-lg-3">
                            <div class="card h-100 shadow-sm">
                                {{-- Gambar Produk --}}
                                <img src="{{ $product->image_url ?: 'https://via.placeholder.com/400x300.png?text=No+Image' }}"
                                    class="card-img-top" 
                                    alt="{{ $product->name }}"
                                    style="height: 200px; object-fit: cover;">
                                
                                {{-- Card Body --}}
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text fw-bold text-primary fs-5">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </p>
                                    <p class="card-text text-muted small">
                                        Stok: {{ $product->stock_quantity }}
                                    </p>

                                    {{-- ⭐ INI YANG BERUBAH: Form untuk Tambah ke Keranjang --}}
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-auto">
                                        @csrf
                                        <button type="submit" class="btn btn-primary w-100">
                                            <i class="bi bi-cart-plus me-1"></i>
                                            Tambah ke Keranjang
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- Jika tidak ada produk di kategori ini --}}
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                <i class="bi bi-info-circle me-2"></i>
                                Belum ada produk di kategori ini.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
@endsection