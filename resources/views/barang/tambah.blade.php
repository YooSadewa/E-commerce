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
<body class="bg-gradient-to-b from-[#420008] to-[#000000] overflow-hidden">
    {{-- <x-Navbar /> --}}
    {{-- @extends('layouts.app')
    @section('title', 'Edit Barang')

    @section('content') --}}
    <div class="w-full h-full my-[63px] mt-[20px] flex">
        <form action="" class="relative w-[345px] flex flex-col m-auto h-[645px] bg-[#FFF] px-[32px] pt-[45px] gap-[40px] rounded-[12px]
        md:w-[700px] md:h-[1000px] md:px-[50px] md:pt-[90px] md:gap-[80px]
        lg:w-[1200px] lg:h-[570px] lg:flex lg:flex-col lg:items-center lg:gap-[40px]" 
        method="POST" enctype="multipart/form-data">
            
            <h1 class="text-center font-bold -my-[25px] text-[#000] md:text-[36px] lg:text-[36px] lg:-my-[45px] lg:mb-0">Tambahkan Barang</h1>
            
            <div class="flex flex-col lg:flex-row lg:w-full lg:gap-[60px]">
                <!-- Container for Nama, Harga, Stok -->
                <div class="flex flex-col gap-[35px] md:gap-[60px] lg:w-1/2">
                    <div class="relative">
                        <input type="text" id="nama_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " />
                        <label for="nama_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                    md:text-[24px] md:peer-focus:-translate-x-5">
                            Nama Barang
                        </label>
                    </div>
                    
                    <div class="relative">
                        <input type="text" id="harga_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " />
                        <label for="harga_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                        md:text-[24px] md:peer-focus:-translate-x-5">
                            Harga Barang
                        </label>
                    </div>
                    
                    <div class="relative">
                        <input type="text" id="stok_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " />
                        <label for="stok_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                        md:text-[24px] md:peer-focus:-translate-x-5">
                            Stok Barang
                        </label>
                    </div>
                </div>
    
                <!-- Container for Foto, Deskripsi, and Kategori -->
                <div class="flex flex-col lg:w-1/2 lg:ml-[20px]">
                    <!-- Foto Barang -->
                    <div class="relative mb-[35px]">
                        <label class="block mb-2 text-base text-[#000] md:text-[24px]">Foto Barang</label>
                        <div class="w-full h-[25px] md:h-[35px] md:rounded-[18px] text-[12px] md:text-[18px] rounded-[12px] border-black border-[1px] text-center flex items-center justify-center text-[#000] cursor-pointer" onclick="document.getElementById('foto_barang').click()">
                            File Chosen
                        </div>
                        <input type="file" id="foto_barang" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0].name;" />
                        <div id="file-name" class="mt-2 text-[#000]"></div>
                    </div>
    
                    <!-- Deskripsi Barang -->
                    <div class="relative">
                        <textarea id="deskripsi_barang" cols="30" rows="10" class="peer border-b-[1px] border-black w-full h-[65px] placeholder-transparent focus:outline-none focus:border-blue-500 -mt-[15px] md:text-[24px] md:h-[120px] lg:max-h-[300px] lg:min-h-[37px] lg:h-[37px] lg:" placeholder=" "></textarea>
                        <label for="deskripsi_barang" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-4 -mt-[20px]
                                                                md:text-[24px] md:peer-focus:-translate-x-5
                                                                lg:mt-0">
                            Deskripsi Barang
                        </label>
                    </div>
    
                    <!-- Kategori Barang -->
                    <div class="relative">
                        <select id="kategori_barang" name="kategori_barang" class="border-b-[1px] border-black w-full focus:outline-none focus:border-blue-500 mt-[5px] appearance-none md:text-[24px]">
                            <option value="" disabled selected hidden>Kategori Barang</option>
                            <option value="mouse">Mouse</option>
                            <option value="keyboard">Keyboard</option>
                            <option value="audio">Audio</option>
                            <option value="gears">Gears</option>
                        </select>
                    </div>
                </div>
            </div>
    
            <!-- Submit Button -->
            <input type="submit" value="SUBMIT" name="submit" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold
                                                                md:px-[120px] md:py-[20px] md:rounded-[30px] md:text-[24px] md:-mt-[30px] lg:w-[300px] lg:mt-[40px]">
        </form>
    </div>
    
    
    <div class="w-full h-[15px] bg-[#E3001A] -mt-[100px]"></div>
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
