<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link hre="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body class="bg-[#D4D4D4]">
    <x-Navbar />
    <div class="bg-[#FFF] w-[400px] h-[400px] m-auto mt-[12px] pt-[10px] rounded-[12px] mt-[80px]">
        <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[380px] h-[190px] object-cover m-auto rounded-[12px]">
        <div class="w-[380px] flex flex-row mt-[10px] gap-[2px] mx-[10px] overflow-hidden">
            <button><p class=""><</p></button>
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]">
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]">
            <img src="{{asset('assets/alia.jpg')}}" alt="" class="w-[175px] h-[175px] rounded-[12px]">
        </div>
    </div>
    <div class="w-[380px] m-auto mt-[10px]">
        <h1 class="font-bold text-[24px]">Fantech ATOM96</h1>
        <div class="flex">
            <p class="font-bold text-[22px] text-[#E3001A]">In Stock</p>
            <p class="my-auto ml-auto">14 Tersisa</p>
        </div>
        <div class="flex">
            <div class="w-[75px] h-[40px] bg-[#FFF] mt-[5px] rounded-[5px] flex">
                <i class="flex fa-solid fa-star text-[#EAB700] text-[25px] my-auto ml-[6px] items-center h-[40px]"></i>
                <p class="text-[20px] h-[40px] flex items-center ml-auto mr-[6px] font-medium">4,9</p>
            </div>
            <p class="flex mt-[5px] items-center ml-[10px] text-[12px] h-[40px]">10Rb+ Terjual</p>
        </div>
        <h1 class="font-medium text-[32px]">Rp. 490.000</h1>
    </div>
    <div class="w-full bg-[#FFF] rounded-[12px] min-h-[360px] p-[15px] border-b-[1px] border-black mt-[21px]">
        <h1 class="font-semibold">Description</h1>
        <p class="font-light text-[12px] mt-[16px]">Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.

            Register your Fantech product below for peace of mind, and to be notified when new firmware updates or other great product news is available.
            Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games. Register your Fantech product below for peace of mind, and to be notified when new firmware updates or other great product news is available.</p>
    </div>
    <div class="w-full bg-[#FFF] rounded-[12px] min-h-[360px] border-t-[1px] border-black">
        <h1 class="font-semibold text-[15px] m-[15px]">Rating Produk</h1>
        <div class="border-y-[1px] min-h-[360px] border-black">
            <div class="flex pt-[10px]">
                <img src="{{ asset('assets/ambatukam.jpg')}}" alt="" class="w-[25px] h-[25px] mt-[3px] ml-[15px] rounded-full">
                <div class="flex flex-col ml-[10px]">
                    <p class="font-light text-[11px]">Steve Maug</p>
                    <p class="font-semibold text-[9px]">Sangat Baik</p>
                </div>              
            </div>
            <p class="font-light text-[11px] mx-[15px] mt-[5px] text-justify">
                Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.
            </p>
            <div class="w-[395px] flex flex-wrap mx-[15px] mt-[5px] gap-[2px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
            </div>
        </div>
        <div class="border-y-[1px] min-h-[360px] border-black">
            <div class="flex pt-[10px]">
                <img src="{{ asset('assets/ambatukam.jpg')}}" alt="" class="w-[25px] h-[25px] mt-[3px] ml-[15px] rounded-full">
                <div class="flex flex-col ml-[10px]">
                    <p class="font-light text-[11px]">Steve Maug</p>
                    <p class="font-semibold text-[9px]">Sangat Baik</p>
                </div>              
            </div>
            <p class="font-light text-[11px] mx-[15px] mt-[5px] text-justify">
                Only real Fantech products give gamers the best competitive edge. Using a legitimate Fantech Gaming Gear product compared to a poorly-made fake or copy can be the difference between winning and losing at your favorite games.
            </p>
            <div class="w-[395px] flex flex-wrap mx-[15px] mt-[5px] gap-[2px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
                <img src="{{ asset('assets/all.jpg')}}" alt="" class="w-[130px] h-[130px]">
            </div>
        </div>
    </div>
    <x-buy />
</body>
</html>