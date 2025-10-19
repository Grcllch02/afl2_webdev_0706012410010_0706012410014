@extends("Layout.mainlayout")

@section("title", "Keranjang_Megaria_Sport")
@section("keranjangActive", "active")

@section("content")
    <h1>Keranjang Belanja</h1>

    @if($carts->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td>{{ $cart->user->name }}</td>
                        <td>{{ $cart->product->name }}</td>
                        <td>{{ $cart->quantity }}</td>
                        <td>Rp {{ number_format($cart->product->price, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada data di keranjang.</p>
    @endif
@endsection
