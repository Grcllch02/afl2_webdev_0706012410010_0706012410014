<link rel="stylesheet" href="css/navigation.css">

<nav class="navbar navbar-expand-lg bg-light border-bottom border-2" style="border-color: #e2d8c6;">
    <div class="container py-3">
        <a class="navbar-brand fw-semibold d-flex align-items-center" href="/beranda"
            style="font-family: 'Playfair Display', serif; color: #4a3b2c;">
            <img src="image/LOGO-MEGARIA-SPORT.png" alt="Logo" class="img-fluid me-2"
                style="width: 60px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-semibold" style="font-family: 'Poppins', sans-serif;">
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('berandaActive')" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('katalogActive')" href="/katalog">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('keranjangActive')" href="/keranjang">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('profilActive')" href="/profil">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
