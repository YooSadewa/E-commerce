<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
{{-- @extends('layouts.app')

@section('content') --}}
<body class="bg-gradient-to-b from-[#420008] to-[#000000] overflow-x-hidden">
<x-navbar />
<div class="w-full h-full my-[63px] mt-[40px] flex">
        <form action="{{ route('barang.store') }}" class="relative w-[345px] flex flex-col m-auto h-[645px] bg-[#FFF] px-[32px] pt-[45px] gap-[40px] rounded-[12px]" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="relative">
            <input type="text" id="nama_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" " />
            <label for="nama_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                Nama Barang
            </label>
        </div>

        <div class="relative">
            <input type="number" id="harga_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px]" placeholder=" " />
            <label for="harga_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                Harga Barang
            </label>
        </div>

        <div class="relative">
            <input type="number" id="stok_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" " />
            <label for="stok_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                Stok Barang
            </label>
        </div>

        <div class="relative">
            <textarea id="deskripsi_barang" cols="30" rows="10" class="peer border-b-[1px] border-black w-full h-[220px] placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" "></textarea>
            <label for="deskripsi_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-4">
                Deskripsi Barang
            </label>
        </div>

        <div class="relative">
            <input type="file" id="stok_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" " />
            <label for="stok_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                Foto Barang
            </label>
        </div>
        
        <input type="submit" value="SUBMIT" name="submit" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold">
    </form>
</div>




<div class="w-full h-[15px] bg-[#E3001A]"></div>
    
</body>
{{-- <div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-6">Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="nama_barang" class="block font-bold">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="harga_barang" class="block font-bold">Harga Barang</label>
            <input type="text" name="harga_barang" id="harga_barang" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="stok" class="block font-bold">Stok</label>
            <input type="number" name="stok" id="stok" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div>
            <label for="deskripsi_barang" class="block font-bold">Deskripsi Barang</label>
            <textarea name="deskripsi_barang" id="deskripsi_barang" class="w-full border border-gray-300 rounded px-4 py-2" required></textarea>
        </div>

        <div>
            <label for="kategori" class="block font-bold">Kategori</label>
            <select name="kategori" id="kategori" class="w-full border border-gray-300 rounded px-4 py-2" required>
                <option value="keyboard">Keyboard</option>
                <option value="mouse">Mouse</option>
                <option value="audio">Audio</option>
                <option value="gear">Gear</option>
            </select>
        </div>

        <div>
            <label for="foto_utama" class="block font-bold">Foto Utama</label>
            <input type="file" name="foto_utama" id="foto_utama" class="w-full border border-gray-300 rounded px-4 py-2">
        </div>

        <div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Barang</button>
        </div>
    </form>
</div>
@endsection --}}
