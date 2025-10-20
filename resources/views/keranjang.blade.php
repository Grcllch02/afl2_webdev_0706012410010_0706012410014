{{-- @extends("Layout.mainlayout")
@section("title", "Keranjang_Megaria_Sport")
@section("keranjangActive", "active")
@section("content")
    
@endsection --}}

@extends('Layout.mainlayout')

@section('title', 'Keranjang Belanja')

@section('content')
<h1 class="text-center mb-5">Keranjang Belanja</h1>

@if($cartItems->count() > 0)
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        @foreach($cartItems as $item)
        <div class="row align-items-center mb-3 pb-3 border-bottom">
            <div class="col-md-2">
                <img src="{{ $item->product->image_url }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
            </div>
            <div class="col-md-4">
                <h5>{{ $item->product->name }}</h5>
                <p class="text-muted mb-0">Rp {{ number_format($item->product->price, 0, ',', '.') }}</p>
            </div>
            <div class="col-md-2">
                <input type="number" class="form-control" value="{{ $item->quantity }}" min="1">
            </div>
            <div class="col-md-2">
                <p class="mb-0 fw-bold">Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</p>
            </div>
            <div class="col-md-2">
                <button class="btn btn-danger btn-sm w-100">Hapus</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">Ringkasan Belanja</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span>Total:</span>
                    <span class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                </div>
                <hr>
                <button class="btn btn-success w-100 mt-3">Checkout</button>
                <button class="btn btn-outline-primary w-100 mt-2">Update Keranjang</button>
            </div>
        </div>
    </div>
</div>
@else
<div class="text-center py-5">
    <h3 class="text-muted">Keranjang Anda kosong.</h3>
    <p>Mulai belanja sekarang!</p>
    <a href="{{ route('katalog') }}" class="btn btn-primary">Lanjut Belanja</a>
</div>
@endif
@endsection