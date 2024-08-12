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

<body class="bg-[#D4D4D4]">
    <x-Navbar />

    <div class="content">
        <div class="relative mt-8 flex justify-center">
            <input
                type="text"
                id="search"
                placeholder=" "
                class="peer w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:outline-none" />
            <label for="search" class="absolute top-0 text-gray-500 transition-transform transform -translate-y-1 scale-75 origin-top-left peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-black-500">
                <p class="text-[13px]">Search products</p>  
            </label>
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <div class="cart bg-white flex">
            <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </div>
    </div>

    <div class="carousel mt-6 mx-[30px]">
        <div id="slider-1" class="container mx-auto">
            <div class="hitam bg-cover bg-center sm:h-[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] text-white py-24 px-10" style="background-image: url('/assets/collab.webp');">
            </div>
            <br>
        </div>



      <div id="slider-2" class="container mx-auto">
        <div class="hitam bg-cover bg-center sm:h-[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] text-white py-24 px-10" style="background-image: url('/assets/collab.webp');">
        </div>
      <br>
      </div>
      </div>
    </div>
 <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
  </div>
    </div>

</body>

</html>