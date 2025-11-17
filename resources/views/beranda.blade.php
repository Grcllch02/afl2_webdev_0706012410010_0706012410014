@extends('Layout.mainlayout')
@include("Layout.navigation")
@section('berandaActive', 'active')
@section('title', 'Tentang Kami') {{-- Judulnya lebih cocok Tentang Kami --}}

@section('content')

    <div class="container py-5">

        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Tentang Kami</h1>
        </div>

        <div class="card shadow-sm border-0 rounded-4 mb-5">
            <div class="card-body p-4 p-md-5">
                <div class="row g-4 align-items-center">

                    <div class="col-lg-5">
                        <img src="https://github.com/michellempi/AFL3-Webprog/blob/main/toko.jpg?raw=true"
                            class="img-fluid rounded-3" alt="Toko Megaria Sport">
                    </div>

                    <div class="col-lg-7">
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill mb-3 fs-6">Sejak 1981</span>
                        <h2 class="fw-bold mb-3 text-primary">Megaria Sport</h2>
                        <p class="text-muted">
                            Pusat grosir peralatan olahraga dengan harga bersaing, dipercaya selama lebih dari 40 tahun.
                        </p>
                        <p class="text-muted">
                            Didirikan oleh Djohan Soetanto pada tahun 1981 di Surabaya. Kami melayani toko kecil di Jawa
                            Timur dan menawarkan mainan anak sebagai produk sampingan. Kami menjaga hubungan baik dengan
                            pelanggan dan berkomitmen memberikan layanan terbaik.
                        </p>

                        <div class="row g-3 mt-4">
                            <div class="col-sm-6">
                                <div class="p-3 bg-primary-subtle rounded-3 text-center h-100">
                                    <h3 class="fw-bold text-primary mb-1">40+</h3>
                                    <p class="mb-0 text-primary-emphasis fw-medium">Tahun Pengalaman</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 bg-warning-subtle rounded-3 text-center h-100">
                                    <h3 class="fw-bold text-warning-emphasis mb-1">100+</h3>
                                    <p class="mb-0 text-warning-emphasis fw-medium">Mitra Toko</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4 h-100 bg-primary-subtle">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-primary-emphasis text-center mb-4">Visi</h3>
                        <p class="fs-5 text-primary-emphasis text-center">
                            Menjadi pemimpin terpercaya dalam memberikan solusi berkualitas tinggi yang memberdayakan
                            pelanggan untuk sukses.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4 h-100 bg-warning-subtle">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-warning-emphasis text-center mb-4">Misi</h3>
                        <ul class="list-unstyled mb-0 text-warning-emphasis">
                            <li class="d-flex align-items-baseline mb-2">
                                <i class="bi bi-dot fs-3 me-2" style="line-height: 1;"></i>
                                <span>Menyediakan produk dan layanan inovatif yang memenuhi kebutuhan pelanggan.</span>
                            </li>
                            <li class="d-flex align-items-baseline mb-2">
                                <i class="bi bi-dot fs-3 me-2" style="line-height: 1;"></i>
                                <span>Membangun hubungan jangka panjang berbasis kepercayaan dan transparansi.</span>
                            </li>
                            <li class="d-flex align-items-baseline">
                                <i class="bi bi-dot fs-3 me-2" style="line-height: 1;"></i>
                                <span>Mendorong pengembangan berkelanjutan dan tanggung jawab sosial.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Nilai-Nilai Kami</h2>
            <p class="text-muted">Prinsip yang menjadi landasan dalam perjalanan bisnis kami</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold text-primary">Kepercayaan</h4>
                        <p class="text-muted small mb-0">
                            Membangun hubungan bisnis berdasarkan kepercayaan dan transparansi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold text-warning-emphasis">Kekeluargaan</h4>
                        <p class="text-muted small mb-0">
                            Menjaga hubungan hangat dengan pelanggan seperti keluarga besar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold text-success">Kualitas</h4>
                        <p class="text-muted small mb-0">
                            Selalu mengutamakan kualitas produk dan layanan untuk kepuasan pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
