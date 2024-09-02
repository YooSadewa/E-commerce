<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update password admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script>
        module.exports = {
            theme: {
              extend: {
                colors: {
                  customRed: '#E3001A',
                  customBlack: '#000000',
                },
              },
            },
          }
    </script> --}}
</head>

<body class="bg-gradient-to-b from-[#420008] to-[#000000] overflow-x-hidden">
    <x-Navbar />

    <div class="w-full h-full my-[63px] mt-[110px] flex">
        <form action="" class="relative w-[345px] flex flex-col m-auto h-[645px] bg-[#FFF] px-[32px] pt-[45px] gap-[40px] rounded-[12px]">
            
            <div class="relative">
                <input type="text" id="question" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" " />
                <label for="nama_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                    Current password
                </label>
            </div>
    
    
            <div class="relative">
                <input type="text" id="store" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" " />
                <label for="stok_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3">
                    Email
                </label>
            </div>
    
            <div class="relative">
                <textarea id="dealer" cols="30" rows="10" class="peer border-b-[1px] border-black w-full h-[220px] placeholder-transparent focus:outline-none focus:border-blue-500  mt-[5px]" placeholder=" "></textarea>
                <label for="deskripsi_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-4">
                    New password
                </label>
            </div>
            
            <input type="submit" value="SUBMIT" name="submit" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold">
        </form>
    </div>
    
    
    

    <div class="w-full h-[15px] bg-[#E3001A]"></div>


    {{-- @extends('layouts.app')

    @section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-6">Daftar Barang</h2>
    
        <div class="mb-4">
            <a href="{{ route('barang.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Barang</a>
        </div>
    
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4">Nama Barang</th>
                    <th class="py-2 px-4">Harga Barang</th>
                    <th class="py-2 px-4">Stok</th>
                    <th class="py-2 px-4">Kategori</th>
                    <th class="py-2 px-4">Foto Barang</th>
                    <th class="py-2 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                    <tr class="border-b border-gray-300">
                        <td class="py-2 px-4">{{ $barang->nama_barang }}</td>
                        <td class="py-2 px-4">{{ $barang->harga_barang }}</td>
                        <td class="py-2 px-4">{{ $barang->stok }}</td>
                        <td class="py-2 px-4">{{ ucfirst($barang->kategori) }}</td>
                        <td class="py-2 px-4">
                            @if($barang->foto_utama)
                                <img src="{{ asset('storage/' . $barang->foto_utama) }}" alt="Foto Barang" class="w-16 h-16 object-cover">
                            @else
                                <span>Foto tidak tersedia</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 flex space-x-2">
                            <a href="{{ route('barang.edit', $barang->id_barang) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id_barang) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>            
        </table>
    </div>
    @endsection
     --}}

</body>

</html>