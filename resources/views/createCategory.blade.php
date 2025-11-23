@extends('Layout.mainlayout')
@include('Layout.navigation')

@section('title', 'Tambah Kategori')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
    <div class="card p-4 shadow" style="width: 400px;">
        <h4 class="text-center mb-4">TAMBAH KATEGORI</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="name" class="form-control" required placeholder="Masukkan nama kategori">
            </div>

            <button type="submit" class="btn btn-primary w-100">Tambah</button>
        </form>
    </div>
</div>
@endsection
