<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $produks = Produk::latest()->get();

        return view('owner.produk.index', compact('produks'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('owner.produk.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:255',
            'kategori' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable',
        ]);

        Produk::create($request->only([
            'nama_produk',
            'kategori',
            'harga',
            'stok',
            'deskripsi',
        ]));

        return redirect()->route('owner.produk.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit(Produk $produk)
    {
        return view('owner.produk.edit', compact('produk'));
    }

    // Memperbarui produk
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required|max:255',
            'kategori' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable',
        ]);

        $produk->update($request->only([
            'nama_produk',
            'kategori',
            'harga',
            'stok',
            'deskripsi',
        ]));

        return redirect()->route('owner.produk.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    // Menghapus produk
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('owner.produk.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
