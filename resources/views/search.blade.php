<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        module.exports = {
        theme: {
            screens: {
            'handphone': '420px',
            // => @media (min-width: 640px) { ... }
            },
        }
        }
    </script>
</head>
<body class="bg-[#F4F5F6] overflow-x-hidden">
    <x-Navbaradmin />
    <div class="content">
        <form action="{{ route('product.search') }}" method="GET">
            <div class="relative mt-[100px] flex justify-center">
                <input
                    type="text"
                    id="search"
                    placeholder=" "
                    name="search"
                    class="peer w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:outline-none" />
                <label for="search" class="absolute top-0 text-gray-500 transition-transform transform -translate-y-1 scale-75 origin-top-left peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-black-500 ">
                    <p class="text-[13px]">Search products</p>
                </label>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <div class="cart bg-white flex ml-[4px] w-[40px] h-[40px] rounded-full">
                    <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            </form>
    </div>
    <div class="flex justify-between mx-[20px] my-[10px]">
        {{-- <p class="items-center flex"><a href="" class="mr-[6px]">Home</a> / {{ ucfirst($search) }}</p> --}}
        <div class="text-center">
            <p class="text-[12px]">Filter by Price</p>
            <form action="">
                <input type="range" name="price" id="">
            </form>
        </div>
    </div>
    <div class="flex flex-wrap justify-evenly">
        @foreach ($barangs as $barang)          
        <div class="w-[160px] h-[215px] rounded-[10px] border-black border-[1px] p-[10px] my-[10px]
                    md:w-[250px] md:h-full md:rounded-[20px] md:p-[20px] md:my-[10px]
                    lg:w-[310px] lg:rounded-[30px]">
            <img src="{{ asset($barang->foto_utama) }}" alt="" class="w-[140px] h-[140px] m-auto rounded-[10px]
                                                                      md:w-[230px] md:h-[230px] md:rounded-[20px]
                                                                      lg:w-[290px] lg:h-[290px] lg:rounded-[30px]">
            <div class="flex justify-between my-[5px]">
                <p class="text-[7px] flex items-center md:text-[16px] lg:text-[20px]">{{$barang->nama_barang}}</p>
                <div class="flex bg-[#D9D9D9] rounded-[3px]">
                    <i class="fa-solid fa-star text-[8px] p-[2px] text-[#EAB700] flex items-center md:text-[14px] lg:text-[18px]"></i>
                    <p class="text-[7px] items-center flex mr-[2px] md:text-[14px] lg:text-[18px]">4,9</p>
                </div>
            </div>
            <div class="flex justify-between my-[5px]">
                <p class="text-[7px] font-semibold text-[#E3001A] md:text-[16px] lg:text-[20px]">In Stock</p>
                <p class="text-[5px] flex items-center md:text-[14px] lg:text-[18px]">10Rb+ Terjual</p>
            </div>
            <div class="flex justify-between my-[5px]">
                <p class="text-[11px] md:text-[20px] lg:text-[30px]">Rp. {{$barang->harga_barang}}</p>
                <a href="" class="text-[5px] px-[5px] font-semibold bg-[#D9D9D9] rounded-[11px] flex items-center md:text-[14px] text-center lg:hidden">Masukkan ke Troli</a>
            </div>
            <a href="" class="font-semibold bg-[#D9D9D9] rounded-[11px] flex items-center md:hidden hidden text-center lg:flex lg:pl-[63px] lg:py-[10px] lg:rounded-[12px] lg:mt-[20px]">Masukkan ke Troli</a>
        </div>
        @endforeach
    </div>    
</body>
</html>