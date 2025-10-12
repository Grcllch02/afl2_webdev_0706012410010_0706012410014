<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- untuk isi titlenya beda" tiap file --}}
    <title>@yield('title')</title>
</head>

<body>
    {{-- untuk include navigation nanti biar semua ada navnya --}}
    @include()
    {{-- untuk isi bodynya beda" tiap file --}}
    @yield('content')
</body>

</html>
