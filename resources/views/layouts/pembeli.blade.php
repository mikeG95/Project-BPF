
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Bangun Jaya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/toko.css') }}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark"
     style="background:#17365D;">

    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ url('/pembeli') }}">
            <i class="bi bi-buildings"></i> BANGUN JAYA
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarToko">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToko">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pembeli') }}">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pembeli/produk') }}">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pesanan Saya</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart3"></i> Keranjang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-orange btn-sm px-3" href="#">
                        Masuk
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="text-white mt-5 py-4"
        style="background:#17365D;">

    <div class="container text-center">
        <h5 class="fw-bold">BANGUN JAYA</h5>
        <p class="mb-1">Solusi kebutuhan bahan bangunan Anda.</p>
        <small>© 2026 Bangun Jaya. All Rights Reserved.</small>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
