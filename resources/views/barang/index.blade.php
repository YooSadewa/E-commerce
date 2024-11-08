<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="overflow-x-hidden">
    <x-NavbarAdmin />

    <div class="w-full h-[15px] bg-[#E3001A] mt-10"></div>

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

</body>

</html>