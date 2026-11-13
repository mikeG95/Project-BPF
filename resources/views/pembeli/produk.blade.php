
@extends('layouts.pembeli')

@section('title', 'Katalog Produk')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold">Katalog Produk</h2>

    <p class="text-secondary">
        Temukan bahan bangunan sesuai kebutuhan Anda.
    </p>

    <div class="row g-3 my-4">

        <div class="col-md-8">
            <input type="text"
                   class="form-control"
                   placeholder="Cari semen, cat, besi, kayu...">
        </div>

        <div class="col-md-4">
            <select class="form-select">
                <option>Semua Kategori</option>
                <option>Semen</option>
                <option>Cat</option>
                <option>Besi</option>
                <option>Kayu</option>
            </select>
        </div>

    </div>

    <div class="row g-4">

        @foreach ([
            ['Semen Portland', '65.000', 'Sak'],
            ['Cat Tembok', '125.000', 'Kaleng'],
            ['Besi Beton', '85.000', 'Batang'],
            ['Pipa PVC', '35.000', 'Batang'],
            ['Kayu Bangunan', '45.000', 'Batang'],
            ['Paku Besi', '20.000', 'Kg']
        ] as $item)

        <div class="col-6 col-md-4 col-lg-3">

            <div class="card product-card shadow-sm">

                <div class="bg-light text-center py-5">
                    <i class="bi bi-box-seam display-3 text-secondary"></i>
                </div>

                <div class="card-body">

                    <h6 class="fw-bold">
                        {{ $item[0] }}
                    </h6>

                    <p class="text-secondary small">
                        Per {{ $item[2] }}
                    </p>

                    <h5 class="fw-bold text-warning">
                        Rp{{ $item[1] }}
                    </h5>

                    <a href="#"
                       class="btn btn-primary btn-sm w-100">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection
