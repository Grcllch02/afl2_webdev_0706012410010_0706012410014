@extends('Layout.mainlayout')
@section('title', 'Beranda_Megaria_Sport')
@section('berandaActive', 'active')
@section('content')
    <div class="container my-5">

        <!-- Judul utama -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">Megaria Sport</h1>
            <p class="text-dark">Pusat Grosir Peralatan Olahraga Berkualitas Sejak 1981</p>
        </div>

        <!-- Keterangan -->
        <div class="card shadow-sm mb-5 border-primary">
            <div class="card-body p-4">
                <h4 class="fw-semibold mb-3 text-dark">Tentang Kami</h4>
                <p class="fs-6 mb-0 text-dark lh-lg text-justify">
                    Megaria Sport adalah pusat grosir peralatan olahraga berkualitas dengan harga kompetitif, didirikan Djohan
                    Soetanto pada 1981 di Surabaya. Awalnya bernama Megaria dan menjual berbagai produk seperti fashion dan alat
                    tulis. Toko ini beralih fokus ke perlengkapan olahraga dan mengganti nama menjadi Megaria Sport. Usaha ini
                    melayani toko kecil di Jawa Timur dan sekitarnya dengan sistem grosir, juga menawarkan mainan anak sebagai
                    produk sampingan, serta menjaga hubungan baik dengan pelanggan setianya hingga kini.
                </p>
            </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="row g-4">

            <!-- Visi -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 fw-semibold">
                            <i class="bi bi-eye"></i> Visi
                        </h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="fs-6 mb-0 text-dark lh-lg text-justify">
                            Menjadi penyedia peralatan olahraga terpercaya di Jawa Timur yang melayani kebutuhan toko-toko
                            kecil hingga masyarakat luas, dengan menawarkan produk berkualitas, harga kompetitif, layanan
                            unggul, serta membangun kemitraan yang berlandaskan kepercayaan dan nilai kekeluargaan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100 border-warning">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0 fw-semibold">
                            <i class="bi bi-bullseye"></i> Misi
                        </h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-2 mt-1"></i>
                                <span class="text-dark">Menyediakan berbagai pilihan peralatan olahraga dengan harga grosir yang kompetitif.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-2 mt-1"></i>
                                <span class="text-dark">Memberikan layanan terbaik dan bermitra dengan sesama pebisnis.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-2 mt-1"></i>
                                <span class="text-dark">Meningkatkan aksesibilitas peralatan olahraga di seluruh wilayah Jawa Timur.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-2 mt-1"></i>
                                <span class="text-dark">Membangun hubungan jangka panjang dengan mitra bisnis berdasarkan kepercayaan dan profesionalisme.</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-2 mt-1"></i>
                                <span class="text-dark">Memberikan jaminan barang kembali jika rusak.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection