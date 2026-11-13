
@extends('layouts.owner')

@section('title', 'Dashboard Pemilik')
@section('page-title', 'Dashboard')

@section('content')

<div class="mb-4">
    <h4 class="fw-bold">Selamat Datang, Pemilik!</h4>
    <p class="text-secondary">Berikut ringkasan aktivitas Toko Bangun Jaya.</p>
</div>

<div class="row g-3 mb-4">

    <div class="col-md-3">
        <div class="stat-card">
            <i class="bi bi-box-seam fs-3 text-primary"></i>
            <p class="text-secondary mt-3 mb-1">Total Barang</p>
            <div class="number">250</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <i class="bi bi-cart-check fs-3 text-success"></i>
            <p class="text-secondary mt-3 mb-1">Total Transaksi</p>
            <div class="number">125</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <i class="bi bi-people fs-3 text-warning"></i>
            <p class="text-secondary mt-3 mb-1">Total Pelanggan</p>
            <div class="number">85</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <i class="bi bi-cash-stack fs-3 text-danger"></i>
            <p class="text-secondary mt-3 mb-1">Pendapatan</p>
            <div class="number fs-5">Rp25.500.000</div>
        </div>
    </div>

</div>

<div class="content-card">
    <h5 class="fw-bold mb-3">Transaksi Terbaru</h5>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andi</td>
                    <td>13 November 2026</td>
                    <td>Rp2.500.000</td>
                    <td><span class="badge bg-success">Lunas</span></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>13 November 2026</td>
                    <td>Rp5.000.000</td>
                    <td><span class="badge bg-warning text-dark">DP</span></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Rudi</td>
                    <td>12 November 2026</td>
                    <td>Rp1.200.000</td>
                    <td><span class="badge bg-success">Lunas</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
