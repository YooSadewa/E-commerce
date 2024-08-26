<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-6">Edit Barang</h2>

    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div>
            <label for="nama_barang" class="block font-bold">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="harga_barang" class="block font-bold">Harga Barang</label>
            <input type="text" name="harga_barang" id="harga_barang" value="{{ old('harga_barang', $barang->harga_barang) }}" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="stok" class="block font-bold">Stok</label>
            <input type="number" name="stok" id="stok" value="{{ old('stok', $barang->stok) }}" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="deskripsi_barang" class="block font-bold">Deskripsi Barang</label>
            <textarea name="deskripsi_barang" id="deskripsi_barang" class="w-full border border-gray-300 rounded px-4 py-2" required>{{ old('deskripsi_barang', $barang->deskripsi_barang) }}</textarea>
        </div>

        <div>
            <label for="kategori" class="block font-bold">Kategori</label>
            <select name="kategori" id="kategori" class="w-full border border-gray-300 rounded px-4 py-2" required>
                <option value="keyboard" {{ old('kategori', $barang->kategori) == 'keyboard' ? 'selected' : '' }}>Keyboard</option>
                <option value="mouse" {{ old('kategori', $barang->kategori) == 'mouse' ? 'selected' : '' }}>Mouse</option>
                <option value="audio" {{ old('kategori', $barang->kategori) == 'audio' ? 'selected' : '' }}>Audio</option>
                <option value="gear" {{ old('kategori', $barang->kategori) == 'gear' ? 'selected' : '' }}>Gear</option>
            </select>
        </div>

        <div>
            <label for="foto_utama" class="block font-bold">Foto Utama</label>
            <input type="file" name="foto_utama" id="foto_utama" class="w-full border border-gray-300 rounded px-4 py-2">
            @if($barang->foto_utama)
                <img src="{{ asset('storage/' . $barang->foto_utama) }}" alt="Foto Utama" class="mt-4 max-w-xs">
            @endif
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Barang</button>
        </div>
    </form>
</div>
@endsection
