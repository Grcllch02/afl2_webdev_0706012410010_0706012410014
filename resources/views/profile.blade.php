{{-- @extends("Layout.mainlayout")
@section("title", "Profil_Megaria_Sport")
@section("profilActive", "active")
@section("content")
    
@endsection --}}

@extends('Layout.mainlayout')
@section('title', 'Profil Saya')

@section('content')
<h1 class="text-center mb-3">Profil Saya</h1>
<p class="text-center text-muted mb-5">Informasi akun Anda</p>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px; font-size: 40px;">
                    {{ strtoupper(substr($user->email ?? 'U', 0, 1)) }}
                </div>
                <h5 class="mb-1">buelizbaik</h5>
                <p class="text-muted">{{ $user->email ?? 'email@example.com' }}</p>
                
                <div class="list-group mt-4 text-start">
                    <a href="#" class="list-group-item list-group-item-action active">Profil Saya</a>
                    <a href="{{ route('keranjang') }}" class="list-group-item list-group-item-action">Keranjang</a>
                    <a href="#" class="list-group-item list-group-item-action">Pesanan</a>
                    <a href="#" class="list-group-item list-group-item-action text-danger">Keluar</a>
                </div>
                
                <button class="btn btn-danger w-100 mt-3">Hapus Akun</button>
            </div>
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-4">Halo, buelizbaik!</h3>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" value="buelizbaik" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" value="{{ $user->email ?? 'buelizbaik@email.com' }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" value="{{ $user->phone ?? '082343527' }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Alamat</label>
                        <input type="text" class="form-control" value="{{ $user->address ?? 'Jl. Tunjungan' }}" readonly>
                    </div>
                </div>
                
                <button class="btn btn-primary mt-3">Edit Profil</button>
            </div>
        </div>
        
        <div class="card shadow-sm mt-4">
            <div class="card-body">
                <h5>Di sini ada keranjang</h5>
                <p class="text-muted mb-0">Lihat produk yang Anda tambahkan ke keranjang di menu Keranjang.</p>
            </div>
        </div>
    </div>
</div>
@endsection