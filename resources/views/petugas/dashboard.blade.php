
@extends('layouts.petugas')

@section('title', 'Dashboard Petugas')
@section('page-title', 'Dashboard Operasional')

@section('content')

<div class="mb-4">
    <h4 class="fw-bold">Halo, Petugas!</h4>
    <p class="text-secondary">Kelola aktivitas operasional toko hari ini.</p>
</div>

<div class="row g-3 mb-4">

    <div class="col-md-4">
        <div class="stat-card">
            <i class="bi bi-box-seam fs-3 text-primary"></i>
            <p class="text-secondary mt-3 mb-1">Barang Tersedia</p>
            <div class="number">250</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <i class="bi bi-exclamation-triangle fs-3 text-warning"></i>
            <p class="text-secondary mt-3 mb-1">Stok Menipis</p>
            <div class="number">12</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <i class="bi bi-receipt fs-3 text-success"></i>
            <p class="text-secondary mt-3 mb-1">Transaksi Hari Ini</p>
            <div class="number">18</div>
        </div>
    </div>

</div>

<div class="content-card">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Daftar Stok Barang</h5>
        <button class="btn btn-orange btn-sm">
            <i class="bi bi-plus-lg"></i> Tambah Barang
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Semen Portland</td>
                    <td>Semen</td>
                    <td>150 Sak</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Cat Tembok</td>
                    <td>Cat</td>
                    <td>8 Kaleng</td>
                    <td><span class="badge bg-warning text-dark">Menipis</span></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Besi Beton</td>
                    <td>Besi</td>
                    <td>200 Batang</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                </tr>
            </tbody>

        </table>
    </div>

</div>

@endsection

