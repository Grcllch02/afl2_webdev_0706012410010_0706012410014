@extends('Layout.mainlayout')
@include('Layout.navigation')
@section('title', 'Edit Profil')
@section('profilActive', 'active')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Edit Profil</h1>
                <a href="{{ route('profile.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Kembali
                </a>
            </div>

            <!-- Success Message -->
            @if (session('status') === 'profile-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Profil berhasil diperbarui!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oops! Ada kesalahan:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Form Update Profile -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-person-circle me-2"></i>Informasi Profil
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Nama Lengkap -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    Nama Lengkap <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       id="name"
                                       name="name"
                                       class="form-control @error('name') is-invalid @enderror" 
                                       value="{{ old('name', $user->name) }}"
                                       required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-semibold">
                                    Email <span class="text-danger">*</span>
                                </label>
                                <input type="email" 
                                       id="email"
                                       name="email"
                                       class="form-control @error('email') is-invalid @enderror" 
                                       value="{{ old('email', $user->email) }}"
                                       required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Nomor Telepon -->
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label fw-semibold">
                                    Nomor Telepon <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       id="phone"
                                       name="phone"
                                       class="form-control @error('phone') is-invalid @enderror" 
                                       value="{{ old('phone', $user->phone) }}"
                                       placeholder="0812345678">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label fw-semibold">
                                    Alamat <span class="text-danger">*</span>
                                </label>
                                <textarea id="address"
                                          name="address"
                                          class="form-control @error('address') is-invalid @enderror" 
                                          rows="3"
                                          placeholder="Masukkan alamat lengkap">{{ old('address', $user->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-2"></i>Simpan Perubahan
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Form Ubah Password -->
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-lock me-2"></i>Ubah Password
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="current_password" class="form-label fw-semibold">
                                    Password Lama
                                </label>
                                <input type="password" 
                                       id="current_password"
                                       name="current_password"
                                       class="form-control" 
                                       placeholder="Masukkan password lama">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="password" class="form-label fw-semibold">
                                    Password Baru
                                </label>
                                <input type="password" 
                                       id="password"
                                       name="password"
                                       class="form-control" 
                                       placeholder="Minimal 8 karakter">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="password_confirmation" class="form-label fw-semibold">
                                    Konfirmasi Password
                                </label>
                                <input type="password" 
                                       id="password_confirmation"
                                       name="password_confirmation"
                                       class="form-control" 
                                       placeholder="Ulangi password baru">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-key me-2"></i>Update Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection