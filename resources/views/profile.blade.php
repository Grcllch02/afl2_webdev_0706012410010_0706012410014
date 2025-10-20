@extends('Layout.mainlayout')
@section('title', 'Profil Saya')
@section('profilActive', 'active') {{-- Ini akan di-handle di 'navigation.blade.php' --}}

@section('content')

    <div class="bg-light py-5"> {{-- Wrapper 'bg-light' untuk memberi background abu-abu pada halaman. --}}
        <div class="container"> {{-- agar kontennya rapi di tengah, tidak mepet ke kiri/kanan. --}}

            <h1 class="text-center mb-3 fw-bold text-dark">Profil Saya</h1>
            <p class="text-center text-muted mb-5">Informasi akun Anda</p>

            <div class="row">
                <div class="col-md-4">
                    {{-- Card Kiri --}}
                    <div class="card shadow-sm text-center">
                        <div class="card-body">

                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 100px; height: 100px;">
                                <i class="bi bi-person-fill" style="font-size: 50px;"></i>
                            </div>

                            <h5 class="mb-1">{{ $user->name ?? '' }}</h5>
                            <p class="text-muted small">{{ $user->email ?? '' }}</p>

                            <div class="list-group mt-4 text-start">
                                <a href="#" class="list-group-item list-group-item-action active"
                                    aria-current="true">Profil Saya</a>
                                <a href="{{ route('keranjang') }}"
                                    class="list-group-item list-group-item-action">Keranjang</a>
                                <a href="#" class="list-group-item list-group-item-action">Pesanan</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action text-danger fw-medium">Keluar</a>
                            </div>

                            <button class="btn btn-danger w-100 mt-3">Hapus Akun</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    {{-- Card Kanan --}}
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="mb-4 fw-normal">Halo, {{ $user->name ?? 'buelizbaik' }}!</h3>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Nama Lengkap</label>

                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->name ?? 'buelizbaik' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Email</label>
                                    <input type="email" class="form-control bg-light"
                                        value="{{ $user->email ?? 'buelizbaik@email.com' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Nomor Telepon</label>
                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->phone ?? '08234567890' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Alamat</label>
                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->address ?? 'Jl. in aja dulu' }}" readonly>
                                </div>
                            </div>

                            <button class="btn btn-primary mt-3 px-4">Edit Profil</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
