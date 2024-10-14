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
</head>
<body class="bg-[#D4D4D4] m-0 p-0">
    <x-Navbar />
        <div class="bg-[#FFF] w-[400px] h-[400px] m-auto mt-[12px] pt-[10px] rounded-[12px] mt-[80px]
        md:w-[754px] md:h-[754px] md:rounded-[24px]
        lg:w-[1240px] lg:h-[458px] lg:rounded-[36px] lg:flex lg:flex-row lg:items-center lg:pt-0">

        <!-- Large image -->
        <img src="{{ asset('storage/' . $barang->foto_utama) }}" alt="" class="w-[380px] h-[190px] object-cover m-auto rounded-[12px]
            md:w-[737px] md:h-[422px] md:rounded-[24px]
            lg:w-[440px] lg:h-[440px] lg:rounded-[36px] lg:ml-0 lg:order-2">

        <!-- Container for small images -->
        <div class="w-[380px] flex flex-row mt-[10px] gap-[2px] mx-[10px] overflow-hidden
            md:w-[737px] md:mt-[16px]
            lg:w-[140px] lg:flex lg:flex-col lg:my-auto lg:order-1 lg:ml-[10px]">
            <button><p class="md:text-[50px] lg:hidden"><</p></button>
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]
                md:w-[288px] md:h-[274px] md:rounded-[24px]
                lg:w-[145px] lg:h-[145px] lg:rounded-[36px]">
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]
                md:w-[288px] md:h-[274px] md:rounded-[24px]
                lg:w-[145px] lg:h-[145px] lg:rounded-[36px]">
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]
                md:w-[288px] md:h-[274px] md:rounded-[24px]
                lg:w-[145px] lg:h-[145px] lg:rounded-[36px]">
        </div>

        <!-- Text Content -->
        <div class="w-[380px] m-auto mt-[20px]
            md:w-[720px] md:mt-[35px] md:ml-[25px]
            lg:w-[670px] lg:my-auto lg:ml-[20px] lg:order-3">
            <h1 class="font-bold text-[24px] md:text-[36px] lg:font-semibold lg:text-[40px]">{{ $barang->nama_barang }}</h1>
            <div class="flex">
                <p class="font-bold text-[22px] text-[#E3001A] md:text-[28px] lg:font-semibold">In Stock</p>
                <p class="my-auto ml-auto md:text-[24px] md:mr-[50px] lg:text-[18px] lg:mr-[80px]">{{ $barang->stok }} Tersisa</p>
            </div>
            <div class="flex">
                <div class="w-[75px] h-[40px] bg-[#FFF] mt-[5px] rounded-[5px] flex
                md:w-[100px] md:h-[52px] md:mt-[16px] md:rounded-[10px]
                lg:rounded-full lg:border-[1px] lg:border-black lg:my-auto lg:mt-[10px]">
                    <i class="flex fa-solid fa-star text-[#EAB700] text-[25px] my-auto ml-[6px] items-center h-[40px]"></i>
                    <p class="text-[20px] h-[40px] flex items-center ml-auto mr-[6px] font-medium md:text-[28px] md:h-[52px] md:mr-[15px]">4,9</p>
                </div>
                <p class="flex mt-[5px] items-center ml-[10px] text-[12px] h-[40px] md:h-[52px] md:text-[18px] md:mt-[16px] lg:mt-[10px]">10Rb+ Terjual</p>
            </div>
            <h1 class="font-medium text-[32px] md:text-[46px] lg:mt-[15px] lg:text-[50px]">{{ $barang->harga_barang }}</h1>
        </div>
    </div>

        <div class="w-full m-auto bg-[#FFF] rounded-[12px] min-h-[360px] p-[15px] border-b-[1px] border-black mt-[180px] md:mt-[260px] lg:mt-[80px] lg:w-[1240px] md:rounded-[24px] md:p-[25px] lg:p-[50px] lg:rounded-[36px]">
            <h1 class="font-semibold md:text-[24px] lg:text-[36px]">Description</h1>
            <p class="font-light text-[12px] mt-[16px] md:text-[18px]">Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.

                Register your Fantech product below for peace of mind, and to be notified when new firmware updates or other great product news is available.
                Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games. Register your Fantech product below for peace of mind, and to be notified when new firmware updates or other great product news is available.</p>
        </div>
        <div class="w-full m-auto bg-[#FFF] mb-[100px] md:mb-[150px] lg:mb-[200px] md:pb-[20px] rounded-[12px] min-h-[360px] border-t-[1px] border-black md:rounded-[24px] md:min-h-[525px] md:rounded-[36px] lg:w-[1240px]">
            <h1 class="font-semibold text-[15px] m-[15px] md:text-[24px] md:m-[25px] lg:ml-[50px] lg:text-[36px]">Rating Produk</h1>
            <div class="border-t-[1px] min-h-[360px] border-black">
                <div class="flex pt-[10px] lg:pt-[30px]">
                    <img src="{{ asset('assets/ambatukam.jpg')}}" alt="" class="w-[25px] h-[25px] mt-[3px] ml-[15px] rounded-full md:w-[50px] md:h-[50px] md:mt-[6px] lg:ml-[50px] lg:w-[80px] lg:h-[80px]">
                    <div class="flex flex-col ml-[10px]">
                        <p class="font-light text-[11px] md:text-[22px] lg:text-[32px] lg:mt-[6px]">Steve Maug</p>
                        <p class="font-semibold text-[9px] md:text-[18px] lg:text-[20px]">Sangat Baik</p>
                    </div>              
                </div>
                <p class="font-light text-[11px] mx-[15px] mt-[5px] text-justify md:text-[20px] md:mt-[10px] lg:ml-[50px] lg:pr-[50px] lg:mt-[20px]">
                    Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.
                </p>
                <div class="w-[395px] flex flex-wrap mx-[15px] mt-[5px] gap-[2px] md:w-[740px] md:mb-[20px] lg:ml-0 lg:justify-center lg:w-full lg:gap-[20px] lg:mt-[15px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                </div>
            </div>
            <div class="border-t-[1px] min-h-[360px] border-black">
                <div class="flex pt-[10px] lg:pt-[30px]">
                    <img src="{{ asset('assets/ambatukam.jpg')}}" alt="" class="w-[25px] h-[25px] mt-[3px] ml-[15px] rounded-full md:w-[50px] md:h-[50px] md:mt-[6px] lg:ml-[50px] lg:w-[80px] lg:h-[80px]">
                    <div class="flex flex-col ml-[10px]">
                        <p class="font-light text-[11px] md:text-[22px] lg:text-[32px] lg:mt-[6px]">Steve Maug</p>
                        <p class="font-semibold text-[9px] md:text-[18px] lg:text-[20px]">Sangat Baik</p>
                    </div>              
                </div>
                <p class="font-light text-[11px] mx-[15px] mt-[5px] text-justify md:text-[20px] md:mt-[10px] lg:ml-[50px] lg:pr-[50px] lg:mt-[20px]">
                    Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.
                </p>
                <div class="w-[395px] flex flex-wrap mx-[15px] mt-[5px] gap-[2px] md:w-[740px] mb-[20px] lg:ml-0 lg:justify-center lg:w-full lg:gap-[20px] lg:mt-[15px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                    <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px] md:w-[245px] md:h-[245px] lg:w-[360px] lg:h-[360px]">
                </div>
            </div>
        </div>
        <div class="w-full border-t-[2px] border-black bg-[#FFF] bottom-0 right-0 fixed">
            <a href="{{ route('barang.edit', $barang->id_barang) }}" class="flex justify-center m-[20px] py-[7px] px-[25px] bg-[#FF0000] my-[9px] rounded-[24px] font-semibold text-[#FFF] md:text-[24px] md:py-[11px] md:px-[71px] md:my-[15px] md:m-[44px] md:rounded-[26px] lg:py-[16px] lg:px-[167px] lg:my-[22px] lg:m-[100px] lg:rounded-[42px] lg:text-[34px]">Edit Product</a>
            <div class="w-full h-[15px] bg-[#E3001A]">
        </div>
    </body>
</html>