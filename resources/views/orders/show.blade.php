@extends('Layout.mainlayout')
@section('title', 'Detail Pesanan')
@section('profilActive', 'active')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Detail Pesanan #{{ $order->id }}</h1>
                    <div>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>

                    </div>
                </div>

                {{-- Success/Error Message --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Informasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($order->order_date)->format('d M Y') }}</p>
                                <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($order->order_time)->format('H:i') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Status:</strong> 
                                    <span class="badge 
                                        @if($order->status == 'pending') bg-warning 
                                        @elseif($order->status == 'paid') bg-info
                                        @elseif($order->status == 'shipped') bg-primary
                                        @elseif($order->status == 'delivered') bg-success
                                        @else bg-danger 
                                        @endif">
                                        {{ strtoupper($order->status) }}
                                    </span>
                                </p>
                                <p><strong>Total:</strong> 
                                    <span class="text-primary fs-5">
                                        Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Produk yang Dipesan</h5>
                    </div>
                    <div class="card-body">
                        @foreach($order->orderDetails as $detail)
                            <div class="row align-items-center border-bottom py-3">
                                <div class="col-md-6 d-flex align-items-center">
                                    <img src="{{ $detail->product->image_url ? asset($detail->product->image_url) : 'https://via.placeholder.com/60.png?text=No+Img' }}"
                                        alt="{{ $detail->product->name }}" 
                                        class="img-fluid me-3 rounded"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <strong>{{ $detail->product->name }}</strong><br>
                                        <small class="text-muted">{{ $detail->product->category->name }}</small><br>
                                        <small class="text-muted">Stok saat ini: {{ $detail->product->stock_quantity }}</small>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <p class="mb-0">Rp {{ number_format($detail->price, 0, ',', '.') }}</p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <p class="mb-0">x {{ $detail->quantity }}</p>
                                </div>
                                <div class="col-md-2 text-end">
                                    <strong class="text-primary">
                                        Rp {{ number_format($detail->price * $detail->quantity, 0, ',', '.') }}
                                    </strong>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection