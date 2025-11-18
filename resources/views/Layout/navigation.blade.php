<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
<nav class="navbar navbar-expand-lg bg-light border-bottom border-2" style="border-color: #e2d8c6;">
    <div class="container py-3">
        <a class="navbar-brand fw-semibold d-flex align-items-center" href="{{ route('beranda') }}"
            style="font-family: 'Playfair Display', serif; color: #4a3b2c;">
            <img src="{{ asset('image/LOGO-MEGARIA-SPORT.png') }}" alt="Logo" class="img-fluid me-2"
                style="width: 60px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-semibold" style="font-family: 'Poppins', sans-serif;">
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('berandaActive')" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark mx-2 @yield('katalogActive')" href="{{ route('katalog') }}">Katalog</a>
                </li>

                @auth
                    {{-- ✅ Kalau sudah login --}}
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-2 @yield('keranjangActive')" href="{{ route('keranjang') }}">
                            <i class="bi bi-cart"></i> Keranjang
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark mx-2 @yield('profilActive')" href="#" 
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.index') }}">
                                <i class="bi bi-person me-2"></i> Profil
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('orders.index') }}">
                                <i class="bi bi-bag me-2"></i> Pesanan
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- ✅ Kalau belum login --}}
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-2" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary mx-2" href="{{ route('register') }}">
                            <i class="bi bi-person-plus me-1"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>