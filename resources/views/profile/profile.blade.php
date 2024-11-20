<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gradient-to-b from-[#420008] to-[#000000] overflow-hidden">
    <x-Navbar />
    <div class="w-[345px] h-[480px] mx-auto mt-[120px] mb-[227px] md:w-[700px] lg:flex lg:w-[1000px] lg:gap-[100px]">
        <!-- Profile Content -->
        <div class="lg:flex lg:flex-col">
            <h1 class="text-center text-[#FFF] font-semibold md:text-[24px]">Profile</h1>
            
            <!-- Profile Picture -->
            <img src="{{ isset($user) && $user->foto_user ? asset('uploads/' . $user->foto_user) : 'https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png' }}" 
            alt="Foto User" 
            class="w-[120px] h-[120px] m-auto rounded-full mt-[25px] md:w-[200px] md:h-[200px]"> 

            @if ($user)
                <h5 class="text-center text-[#FFF] mt-[5px] text-[24px] md:mt-[15px] md:text-[26px]">{{ $user->nama_user }}</h5>
                <p class="text-center text-[#FFF] md:text-[20px]">{{ $user->telp }}</p>
            @endif
        </div>
        
        <!-- Profile Options -->
        <div class="flex flex-col mt-[75px] font-semibold md:text-[20px] justify-center">
            <a href="{{ route('profile.editprofile', $user->id_user) }}" class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-user"></i>
                <p>Profile Update</p>
            </a>
            <a href="{{ route('profile.editpass', $user->id_user) }}" class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-lock"></i>
                <p>Password Update</p>
            </a>

            <p class="text-[#FFF] mt-[10px] text-[20px] text-center lg:text-start">Location:</p>
            <p class="text-[#FFF] text-[18px] mb-3 text-center lg:text-start">Jl. Kuda Laut No.kavling 121, Sungai Jodoh, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29451</p>

            <a href="{{ route('profile.changeLocation', $user->id_user) }}" class="flex w-full h-[55px] bg-[#FFF] items-center gap-[25px] pl-[15px] rounded-[18px] mb-[5px] lg:w-[600px]">
                <i class="fa-solid fa-location-dot"></i>
                <p>Change Location</p>
            </a>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full px-[55px] py-[10px] bg-[#E3001A] text-[#FFF] rounded-[36px] mt-[130px] md:mt-[30px] lg:px-0 lg:justify-center lg:w-[300px]">Log Out</button>
            </form>
        </div>
    </div>
</body>
</html>
