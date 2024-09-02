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
</head>
<body class="bg-gradient-to-b from-[#420008] to-[#000000] overflow-hidden">
    <div class="w-[345px] h-[480px] mx-auto mt-[120px] mb-[227px] md:w-[700px] lg:flex lg:w-[1000px] lg:gap-[100px]">
        @foreach ($admins as $admin)
        <div class="lg:flex lg:flex-col">
            <h1 class="text-center text-[#FFF] font-semibold  md:text-[24px]">Profile</h1>
            <img src="{{ asset('assets/ambatukam.jpg')}}" alt="" class="w-[120px] m-auto rounded-full mt-[25px] md:w-[200px]">
            <h5 class="text-center text-[#FFF] mt-[5px] text-[24px] md:mt-[15px] md:text-[26px]">{{$admin->nama_admin}}</h5>
            <p class="text-center text-[#FFF] md:text-[20px]">{{$admin->telp}}</p>
        </div>
        <div class="flex flex-col mt-[75px] font-semibold md:text-[20px] justify-center">
            <a href="{{route('admin.edit', $admin->id_admin)}}" class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-user"></i>
                <p>Profile Update</p>
            </a>
            <div class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-lock"></i>
                <p>Password Update</p>
            </div>
            <a href="{{ route('barang.create') }}" class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                <p>Add Product</p>
            </a>
            <a href="" class= "px-[55px] py-[10px] bg-[#E3001A] text-[#FFF] rounded-[36px] mt-[130px] md:mt-[30px] hidden md:hidden lg:flex lg:px-0 lg:justify-center">Log Out</a>
        </div>
        <div class="flex justify-center">
            <a href="" class= "px-[55px] py-[10px] bg-[#E3001A] text-[#FFF] rounded-[36px] mt-[130px] md:mt-[30px] lg:hidden">Log Out</a>
        </div>
        @endforeach
    </div>
</body>
</html>