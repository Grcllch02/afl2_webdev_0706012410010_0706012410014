@extends('Layout.mainlayout')
@section('title', 'Keranjang_Megaria_Sport')
@section('keranjangActive', 'active')

@section('content')
    <div class="container py-4">
        <div class="text-center my-4">
            <h1 class="mb-0">Keranjang Belanja</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(count($cart) > 0)
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach($cart as $productId => $item)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-5 d-flex align-items-center">
                                        <img src="{{ $item['image_url'] ?: 'https://via.placeholder.com/60.png?text=No+Img' }}"
                                            alt="{{ $item['name'] }}" 
                                            class="img-fluid me-3 rounded"
                                            style="width: 60px; height: 60px; object-fit: cover;">
                                        <span class="fw-bold">{{ $item['name'] }}</span>
                                    </div>

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        Rp {{ number_format($item['price'], 0, ',', '.') }}
                                    </div>

                                    <div class="col-md-1 mt-2 mt-md-0 d-flex justify-content-md-center justify-content-start">
                                        <form action="{{ route('cart.update', $productId) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" name="quantity" class="form-control form-control-sm text-center"
                                                value="{{ $item['quantity'] }}" min="1" style="max-width: 60px;"
                                                onchange="this.form.submit()">
                                        </form>
                                    </div>

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        <span class="fw-bold">
                                            Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                                        </span>
                                    </div>

                                    <div class="col-md-2 text-md-end text-start mt-2 mt-md-0">
                                        <form action="{{ route('cart.remove', $productId) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger text-decoration-none p-0">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded shadow-sm">
                        <div class="fs-5">
                            Total: <strong class="text-primary">Rp {{ number_format($grandTotal, 0, ',', '.') }}</strong>
                        </div>
                        <div>
                            <form action="{{ route('cart.clear') }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger me-2">Kosongkan Keranjang</button>
                            </form>
                            <form action="{{ route('orders.checkout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center py-5">
    <h5 class="mb-3"><i class="bi bi-cart-x"></i> Keranjang masih kosong</h5>
    <p>Yuk cek katalog produk dan mulai belanja!</p>
    <a href="{{ route('katalog') }}" class="btn btn-lg btn-primary px-4">
        <i class="bi bi-bag"></i> Lihat Produk
    </a>
</div>

</div>

        @endif
    </div>
@endsection