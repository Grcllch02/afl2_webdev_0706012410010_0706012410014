<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megaria Sport - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <span style="color: #FFA500;">MEGARIA</span>
                <span style="color: #4169E1;">Sport</span>
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                <a class="nav-link" href="{{ route('katalog') }}">Katalog</a>
                <a class="nav-link" href="{{ route('keranjang') }}">Keranjang</a>
                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <h5>Megaria Sport</h5>
            <p class="mb-1">0813 3069 8331 (Christin)</p>
            <p class="mb-0">megariasport@gmail.com</p>
            <p class="mb-0">Jl. Songoyudan No.25, Nyamplungan, Kec. Pabean Cantikan, Surabaya, Jawa</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>