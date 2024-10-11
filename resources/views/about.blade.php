<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Fantech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="bg-gray-100">
    <x-Navbaradmin />
    <div class="container mx-auto p-4">
        <!-- Breadcrumb -->
        <div class="text-gray-500 mb-4">
            <a href="#" class="hover:underline">Home</a> / <span>About Us</span>
        </div>

       <!-- Banner Section -->
<div class="bg-cover bg-center bg-no-repeat h-96 md:h-[500px] flex justify-center items-center" style="background-image: url('https://fantech.id/wp-content/uploads/2023/06/2022-Fantech-World-Company-Profile-AUG-V2.3-01.png');">
</div>


        <!-- Content Section -->
        <div class="bg-white p-8 shadow-lg mt-8">
            <h2 class="text-3xl font-bold text-red-600 mb-4">FANTECH</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Fantech merupakan sebuah brand gaming gears lokal yang didirikan oleh tiga bersaudara yaitu Fandy
                Pinardy, Ferdy Pinardy, dan Firsandy Pinardy sejak tahun 2009. Dengan pertumbuhan yang begitu pesat,
                Fantech kini telah berhasil melakukan distribusi ke lebih dari 80 negara serta mencapai lebih dari 5 juta
                pengguna.
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">
                Secara global, Fantech telah memiliki kantor cabang di lebih dari 20 negara dan berhasil menjadi salah
                satu brand gaming gears yang dikenal oleh para gamers di tanah air. Setelah beberapa tahun berdiri,
                Fantech mulai mendapatkan berbagai penghargaan salah satunya penghargaan sebagai “Indonesia Top Brand
                Award” pada tahun 2019.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Fantech berfokus pada penyediaan produk gaming terbaik dan berkualitas yang mampu memenuhi kebutuhan para
                pengguna dari berbagai kalangan. Dengan membawa slogan “Gear Up and Win”, Fantech siap mendukung gamers
                tanah air maupun dunia melalui produk-produk gaming berkualitas.
            </p>
        </div>

<!-- Awards Section -->
<div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="flex items-center">
        <img src="https://fantech.id/wp-content/uploads/2023/06/About-Us-1.jpg.webp" alt="Team Image" class="w-full h-full object-cover rounded-md">
    </div>    
    <div class="bg-white p-8 shadow-lg flex flex-col justify-center relative z-10">
        <h3 class="text-2xl font-bold text-red-600 mb-4">OUR AWARDS & COOPERATION</h3>
        <ul class="space-y-4">
            <li class="flex items-start">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2KFgT0AhxsrvifFspIzJD-PHk4o0HxxTqAw&s" alt="Award 1" class="mr-4 w-24 h-24 object-contain">
                <div>
                    <h4 class="text-lg font-semibold">Great Value</h4>
                    <p class="text-gray-600">Techpowerup</p>
                </div>
            </li>
            <li class="flex items-start">
                <img src="https://fantechworld.com/cdn/shop/files/Award_Icon_TechPowerUp_s_Highly_Recommended.png?v=1702286865" alt="Award 2" class="mr-4 w-24 h-24 object-contain">
                <div>
                    <h4 class="text-lg font-semibold">Highly Recommended</h4>
                    <p class="text-gray-600">Techpowerup</p>
                </div>
            </li>
            <li class="flex items-start">
                <img src="https://fantechworld.com/cdn/shop/files/Award_Icon_TechPowerUp_s_Editor_s_Choice.png?v=1702286792" alt="Award 3" class="mr-4 w-24 h-24 object-contain">
                <div>
                    <h4 class="text-lg font-semibold">Editor's Choice</h4>
                    <p class="text-gray-600">Techpowerup</p>
                </div>
            </li>
        </ul>
    </div>
</div>


    </div>
    <x-Footer />
</body>

</html>
