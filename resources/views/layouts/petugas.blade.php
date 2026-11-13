
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

<div class="sidebar">
    <div class="brand">
        <i class="bi bi-buildings"></i> BANGUN JAYA
    </div>

    <small class="text-white-50 px-3">MENU PETUGAS</small>

    <a href="{{ url('/petugas') }}" class="active">
        <i class="bi bi-grid me-2"></i> Dashboard
    </a>

    <a href="#">
        <i class="bi bi-box-seam me-2"></i> Data Barang
    </a>

    <a href="#">
        <i class="bi bi-tags me-2"></i> Kategori Barang
    </a>

    <a href="#">
        <i class="bi bi-people me-2"></i> Data Pelanggan
    </a>

    <a href="#">
        <i class="bi bi-cart-check me-2"></i> Transaksi
    </a>

    <a href="#">
        <i class="bi bi-wallet2 me-2"></i> Pembayaran
    </a>

    <hr class="border-light">

    <a href="#">
        <i class="bi bi-box-arrow-right me-2"></i> Keluar
    </a>
</div>

<div class="main-content">

    <div class="topbar d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">@yield('page-title')</h5>

        <div>
            <i class="bi bi-person-circle fs-4 me-2"></i>
            <span>Petugas Toko</span>
        </div>
    </div>

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
