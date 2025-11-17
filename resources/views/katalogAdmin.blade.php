@extends('Layout.mainlayout')
@include('Layout.navigation')
@section('title', 'Katalog Admin')
@section('katalogActive', 'active')
@section('content')
    <div class="container my-5">
        <form action="/katalog" method="GET" class="form-inline w-25 d-flex gap-2 mb-4">
            <input type="search" placeholder="Search" name="search" class="form-control">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-4">
            + Add Product
        </a>
        <div class="text-center mb-5 p-5 text-white"
            style="background: linear-gradient(135deg, #0d6efd 0%, #764ba2 100%); border-radius: 15px;">
            <h1 class="display-4 fw-bold">Katalog Produk</h1>
            <p class="lead">Temukan peralatan olahraga terbaik untuk kebutuhan Anda</p>
        </div>

        {{-- Looping Kategori --}}
        @foreach ($categories as $category)
            <div class="mb-5">
                <h2 class="mb-4 display-6 border-bottom pb-2">{{ $category->name }}</h2>

                <div class="row g-4">

                    {{-- Looping Produk di dalam Kategori ini --}}
                    @forelse($category->products as $product)
                        <div class="col-md-4 col-lg-3">
                            <div class="card h-100 shadow-sm">

                                <img src="{{ $product->image_url ?: 'https://via.placeholder.com/400x300.png?text=No+Image' }}"
                                    class="card-img-top" alt="{{ $product->name }}"
                                    style="height: 200px; object-fit: cover;">

                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text fw-bold text-primary fs-5">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </p>
                                    <div class="mt-auto d-flex gap-2">

                                        <a href="{{ route('produk.edit', $product->id) }}" class="btn btn-warning w-50">
                                            Edit
                                        </a>

                                        {{-- Delete --}}
                                        <form action="{{ route('produk.destroy', $product->id) }}" method="POST"
                                            class="w-50">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100"
                                                onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- jika tidak ada produk di kategori ini --}}
                        <div class="col-12">
                            <p class="text-muted">Belum ada produk di kategori ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        @endforeach
        <div>
            {{-- link ini untuk tampilin yang angka 1 2 next" page gitu yang di bawah --}}
            {{ $categories->links() }}
        </div>
    </div>
@endsection
