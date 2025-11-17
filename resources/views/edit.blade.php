@extends('Layout.mainlayout')
@include('Layout.navigation')

@section('title', 'Edit Produk')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="card p-4 shadow" style="width: 450px;">
            <h3 class="text-center mb-4">EDIT PRODUK</h3>

            <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                {{-- Harga --}}
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>

                {{-- Kategori --}}
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label class="form-label">Foto Produk</label>
                    <input class="form-control" type="file" name="image">

                    @if ($product->image_url)
                        <img src="/{{ $product->image_url }}" class="img-thumbnail mt-2" width="120">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary w-100">Update Produk</button>
            </form>
        </div>
    </div>
@endsection
