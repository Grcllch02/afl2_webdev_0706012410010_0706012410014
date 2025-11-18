@extends('Layout.mainlayout')
@include("Layout.navigation")
@section('title', 'Profil Saya')
@section('profilActive', 'active')

@section('content')
    <div class="bg-light py-5">
        <div class="container">
            <h1 class="text-center mb-3 fw-bold text-dark">Profil Saya</h1>
            <p class="text-center text-muted mb-5">Informasi akun Anda</p>

            <div class="row">
                {{-- SIDEBAR KIRI --}}
                <div class="col-md-4">
                    <div class="card shadow-sm text-center">
                        <div class="card-body">
                            {{-- Avatar --}}
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 100px; height: 100px;">
                                <i class="bi bi-person-fill" style="font-size: 50px;"></i>
                            </div>

                            <h5 class="mb-1">{{ $user->name ?? 'User' }}</h5>
                            <p class="text-muted small">{{ $user->email ?? 'email@example.com' }}</p>

                            {{-- MENU SIDEBAR - INI YANG DIPERBAIKI --}}
                            <div class="list-group mt-4 text-start">
                                <a href="{{ route('profile.index') }}" 
                                   class="list-group-item list-group-item-action active">
                                    <i class="bi bi-person"></i> Profil Saya
                                </a>
                                <a href="{{ route('keranjang') }}" 
                                   class="list-group-item list-group-item-action">
                                    <i class="bi bi-cart"></i> Keranjang
                                </a>
                                <a href="{{ route('orders.index') }}" 
                                   class="list-group-item list-group-item-action">
                                    <i class="bi bi-bag-check"></i> Pesanan
                                </a>
                                
                                {{-- Logout Form --}}
                                <form action="{{ route('logout') }}" method="POST" class="d-inline w-100">
                                    @csrf
                                    <button type="submit" 
                                            class="list-group-item list-group-item-action text-danger fw-medium border-0 w-100 text-start">
                                        <i class="bi bi-box-arrow-right"></i> Keluar
                                    </button>
                                </form>
                            </div>

                            {{-- Tombol Hapus Akun --}}
                            <button class="btn btn-danger w-100 mt-3" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                <i class="bi bi-trash"></i> Hapus Akun
                            </button>
                        </div>
                    </div>
                </div>

                {{-- KONTEN KANAN --}}
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="mb-4 fw-normal">Halo, {{ $user->name ?? 'User' }}!</h3>

                            {{-- Success Message --}}
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Nama Lengkap</label>
                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->name ?? 'N/A' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Email</label>
                                    <input type="email" class="form-control bg-light"
                                        value="{{ $user->email ?? 'N/A' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Nomor Telepon</label>
                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->phone ?? 'N/A' }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small text-muted">Alamat</label>
                                    <input type="text" class="form-control bg-light"
                                        value="{{ $user->address ?? 'N/A' }}" readonly>
                                </div>
                            </div>

                            <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3 px-4">
                                <i class="bi bi-pencil"></i> Edit Profil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Konfirmasi Hapus Akun --}}
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteAccountModalLabel">
                        <i class="bi bi-exclamation-triangle"></i> Hapus Akun
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Apakah Anda yakin ingin menghapus akun ini?</p>
                    <p class="text-danger small mb-0">
                        <strong>Peringatan:</strong> Tindakan ini tidak dapat dibatalkan!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="{{ route('profile.destroy') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection