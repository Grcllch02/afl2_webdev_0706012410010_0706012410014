@extends('Layout.mainlayout')
@section('title', 'Tambah Produk')

@section('content')

    {{-- Navbar harus di sini, bukan di atas @extends --}}
    @include('Layout.navigation')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card p-4 shadow" style="width: 400px;">
            <h4 class="d-flex justify-content-center mb-4">TAMBAH PRODUK</h4>

            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Produk</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
