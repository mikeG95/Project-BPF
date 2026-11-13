<?php

use Illuminate\Support\Facades\Route;

// DASHBOARD PEMILIK
Route::get('/owner', function () {
    return view('owner.dashboard');
});

// DASHBOARD PETUGAS
Route::get('/petugas', function () {
    return view('petugas.dashboard');
});

// HALAMAN PEMBELI
Route::get('/pembeli', function () {
    return view('pembeli.home');
});

Route::get('/pembeli/produk', function () {
    return view('pembeli.produk');
});
