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
    <div class="bg-[#FFF] w-[400px] h-[400px] m-auto mt-[12px] pt-[10px] rounded-[12px]">
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
        <p class="font-bold text-[22px] text-[#E3001A]">In Stock</p>
    </div>
</body>
</html>