
@extends('layouts.owner')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Edit Produk</h3>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('owner.produk.update', $produk->id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk"
                           class="form-control"
                           value="{{ old('nama_produk', $produk->nama_produk) }}"
                           required>
                    @error('nama_produk')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-select" required>
                        @foreach(['Semen', 'Cat', 'Besi', 'Kayu', 'Peralatan'] as $kategori)
                            <option value="{{ $kategori }}"
                                {{ old('kategori', $produk->kategori) == $kategori ? 'selected' : '' }}>
                                {{ $kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga"
                           class="form-control"
                           value="{{ old('harga', $produk->harga) }}"
                           min="0" required>
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok"
                           class="form-control"
                           value="{{ old('stok', $produk->stok) }}"
                           min="0" required>
                    @error('stok')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('owner.produk.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
