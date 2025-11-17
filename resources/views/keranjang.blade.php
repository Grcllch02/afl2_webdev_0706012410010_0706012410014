@extends('Layout.mainlayout')

@section('title', 'Keranjang_Megaria_Sport')
@section('keranjangActive', 'active') 

@section('content')
    <div class="container py-4">
        <div class="text-center my-4">
            <h1 class="mb-0">Keranjang Belanja</h1>
        </div>

        @if ($carts->count() > 0)
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    @foreach ($carts as $cart)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    {{-- Kolom 1: Nama Produk (Lebar 5) --}}
                                    <div class="col-md-5 d-flex align-items-center">

                                        <img src="{{ $cart->product->image_url ?: 'https://via.placeholder.com/60.png?text=No+Img' }}"
                                            alt="{{ $cart->product->name }}" class="img-fluid me-3 rounded"
                                            style="width: 60px; height: 60px; object-fit: cover;">

                                        <span class="fw-bold">{{ $cart->product->name }}</span>
                                    </div>

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        Rp {{ number_format($cart->product->price, 0, ',', '.') }}
                                    </div>

                                    <div
                                        class="col-md-1 mt-2 mt-md-0 d-flex justify-content-md-center justify-content-start">
                                        <input type="number" class="form-control form-control-sm text-center"
                                            value="{{ $cart->quantity }}" min="1" style="max-width: 60px;">
                                    </div>

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        <span class="fw-bold">Rp
                                            {{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</span>
                                    </div>
                                    

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        <a href="#" class="text-danger text-decoration-none">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm">
                        @php
                            $grandTotal = $carts->sum(function ($cart) {
                                return $cart->product->price * $cart->quantity;
                            });
                        @endphp

                        <div class="fs-5">
                            Total: <strong class="text-primary">Rp {{ number_format($grandTotal, 0, ',', '.') }}</strong>
                        </div>

                        <div>
                            <button class="btn btn-primary me-2">Update Keranjang</button>

                            <a href="#" class="btn btn-success">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center" role="alert">
                <i class="bi bi-cart-x"></i> Belum ada data di keranjang.
            </div>
        @endif
    </div>
@endsection
