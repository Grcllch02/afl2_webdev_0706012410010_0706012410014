{{-- @extends('Layout.mainlayout')

@section('title', 'Profil User')
@section('profilActive', 'active')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Profil Saya</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="mb-0">Halo, {{ $users->name }}!</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="30%" class="fw-semibold">Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $users->name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Email</td>
                                    <td>:</td>
                                    <td>{{ $users->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">No. Telepon</td>
                                    <td>:</td>
                                    <td>{{ $users->phone ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Alamat</td>
                                    <td>:</td>
                                    <td>{{ $users->address ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-primary" disabled>
                            <i class="bi bi-pencil"></i> Edit Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}