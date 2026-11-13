
@extends('layouts.pembeli')

@section('title', 'Beranda')

@section('content')

<!-- HERO SECTION -->
<section class="py-5" style="background:#EAF0F7;">

    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-md-6">

                <span class="badge bg-warning text-dark mb-3">
                    Toko Bangunan Terpercaya
                </span>

                <h1 class="fw-bold display-5"
                    style="color:#17365D;">
                    Bangun Rumah Impian Bersama Kami
                </h1>

                <p class="text-secondary mt-3">
                    Temukan berbagai kebutuhan bahan bangunan
                    dengan harga terbaik dan kualitas terpercaya.
                </p>

                <a href="{{ url('/pembeli/produk') }}"
                   class="btn btn-orange btn-lg mt-3">
                    Belanja Sekarang
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <div class="col-md-6 text-center">

                <img
                    src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900"
                    class="img-fluid rounded-4 shadow"
                    alt="Material dan konstruksi bangunan"
                    style="max-height:350px; object-fit:cover;">

            </div>

        </div>
    </div>

</section>


<!-- KATEGORI -->
<section class="container py-5">

    <div class="d-flex justify-content-between mb-4">
        <h3 class="fw-bold">Kategori Produk</h3>
    </div>

    <div class="row g-3">

        @foreach ([
            ['Semen', 'bi-bricks'],
            ['Cat', 'bi-paint-bucket'],
            ['Besi', 'bi-tools'],
            ['Kayu', 'bi-tree'],
            ['Pipa', 'bi-water'],
            ['Peralatan', 'bi-hammer']
        ] as $kategori)

        <div class="col-6 col-md-2">

            <div class="content-card text-center py-4">

                <i class="bi {{ $kategori[1] }} fs-1"
                   style="color:#F59E0B;"></i>

                <h6 class="fw-bold mt-3 mb-0">
                    {{ $kategori[0] }}
                </h6>

            </div>

        </div>

        @endforeach

    </div>

</section>


<!-- PRODUK -->
<section class="container pb-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">Produk Pilihan</h3>

        <a href="{{ url('/pembeli/produk') }}"
           class="text-decoration-none">
            Lihat Semua
        </a>

    </div>

    <div class="row g-4">

        @php
            $produk = [
                [
                    'nama' => 'Semen Portland',
                    'harga' => 'Rp65.000',
                    'satuan' => 'Sak',
                    'gambar' => 'photo-1513467655676-561b7d489a88'
                ],
                [
                    'nama' => 'Cat Tembok',
                    'harga' => 'Rp125.000',
                    'satuan' => 'Kaleng',
                    'gambar' => 'photo-1562259949-e8e7689d7828'
                ],
                [
                    'nama' => 'Besi Beton',
                    'harga' => 'Rp85.000',
                    'satuan' => 'Batang',
                    'gambar' => 'photo-1504917595217-d4dc5ebe6122'
                ],
                [
                    'nama' => 'Kayu Bangunan',
                    'harga' => 'Rp45.000',
                    'satuan' => 'Batang',
                    'gambar' => 'photo-1513467655676-561b7d489a88'
                ]
            ];
        @endphp

        @foreach ($produk as $item)

        <div class="col-6 col-md-3">

            <div class="card product-card shadow-sm">

                <img
                    src="https://images.unsplash.com/{{ $item['gambar'] }}?w=500"
                    class="card-img-top"
                    alt="{{ $item['nama'] }}">

                <div class="card-body">

                    <h6 class="fw-bold">
                        {{ $item['nama'] }}
                    </h6>

                    <p class="text-secondary small mb-2">
                        Per {{ $item['satuan'] }}
                    </p>

                    <h5 class="fw-bold"
                        style="color:#F59E0B;">
                        {{ $item['harga'] }}
                    </h5>

                    <a href="#"
                       class="btn btn-outline-primary w-100 btn-sm mt-2">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

@endsection
