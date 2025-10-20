@extends('Layout.mainlayout')

@section('title', 'Keranjang_Megaria_Sport')
@section('keranjangActive', 'active')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Keranjang Belanja</h2>

        @if ($carts->count() > 0)
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="align-middle">
                                            <strong>{{ $cart->product->name }}</strong>
                                        </td>
                                        <td class="align-middle">Rp {{ number_format($cart->product->price, 0, ',', '.') }}
                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group" style="width: 130px;">
                                                <button class="btn btn-outline-secondary btn-sm" type="button" disabled>
                                                    <i class="bi bi-dash"></i>-
                                                </button>
                                                <input type="text" class="form-control form-control-sm text-center"
                                                    value="{{ $cart->quantity }}" readonly>
                                                <button class="btn btn-outline-secondary btn-sm" type="button" disabled>
                                                    <i class="bi bi-plus"></i>+
                                                </button>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <strong>Rp
                                                {{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</strong>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-sm btn-danger" disabled>
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Ringkasan Belanja</h5>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Total Item:</span>
                                        <strong>{{ $carts->sum('quantity') }}</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span>Total Harga:</span>
                                        <strong class="text-primary">
                                            Rp
                                            {{ number_format(
                                                $carts->sum(function ($cart) {
                                                    return $cart->product->price * $cart->quantity;
                                                }),
                                            ) }}
                                        </strong>
                                    </div>
                                    <button class="btn btn-primary w-100" disabled>
                                        Lanjut ke Pembayaran
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="alert alert-info" role="alert">
                <i class="bi bi-cart-x"></i> Belum ada data di keranjang.
            </div>
        @endif
    </div>
@endsection
