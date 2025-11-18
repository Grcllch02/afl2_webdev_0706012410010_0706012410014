@extends('Layout.mainlayout')
@section('title', 'Pesanan Saya')
@section('profilActive', 'active')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Pesanan Saya</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($orders->count() > 0)
            @foreach($orders as $order)
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <strong>Order #{{ $order->id }}</strong>
                            </div>
                            <div class="col-md-6 text-md-end">
                                {{ \Carbon\Carbon::parse($order->order_date)->format('d M Y') }} - 
                                {{ \Carbon\Carbon::parse($order->order_time)->format('H:i') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <span class="badge 
                                    @if($order->status == 'pending') bg-warning 
                                    @elseif($order->status == 'paid') bg-info
                                    @elseif($order->status == 'shipped') bg-primary
                                    @elseif($order->status == 'delivered') bg-success
                                    @else bg-danger 
                                    @endif">
                                    {{ strtoupper($order->status) }}
                                </span>
                            </div>
                            <div class="col-md-3">
                                <strong>{{ $order->orderDetails->count() }} Produk</strong>
                            </div>
                            <div class="col-md-4">
                                <strong class="text-primary">
                                    Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                </strong>
                            </div>
                            <div class="col-md-2 text-end">
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-info text-center">
                Belum ada pesanan.
            </div>
        @endif
    </div>
@endsection