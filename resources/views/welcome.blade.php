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
            <div class="cart bg-white flex ml-[4px] w-[40px] h-[40px] rounded-full">
                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </div>
    </div>

    <div class="mx-[20px]">
        <div class="carousel mt-6">
            <div id="slider-1" class="container mx-auto">
                <div class="hitam bg-cover bg-center sm:h-[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] text-white py-24 px-10" style="background-image: url('/assets/collab.webp');">
                </div>
                <br>
            </div>



            <div id="slider-2" class="container mx-auto">
                <div class="hitam bg-cover bg-center sm:h-[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] text-white py-24 px-10" style="background-image: url('/assets/merdeka.webp');">
                </div>
                <br>
            </div>
        </div>



        <div class="flex justify-between w-10 md:w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-2 md:w-4 p-1.5 md:p-2 "></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-2 md:w-4 p-1.5 md:p-2"></button>
        </div>

        <div class="maha5 flex justify-center mt-3">
            <h1 class="text-[16px] font-sans:inter font-medium">Official Collaboration MAHA5 Fantech</h1>
        </div>

        <div class="card-group w-full flex justify-center mt-4">
          <div class="flex flex-col">
          <div class="card w-[220px] h-[95px] border-[1px] rounded-[12px] border-black bg-white">
                <div class="card-img mt-[2.5px] ml-[2.5px]">
                    <img class="w-[106px] rounded-[15px] h-[88px] object-cover" src="{{asset('assets/alia.jpg')}}" alt="">
                </div>
                <div class="card-header relative w-[88px] alia">
                    <p class="text-[8px]">Fantech X MAHA5 ALIA ADELIA</p>
                    <div class="flex justify-between">
                        <p class="text-[red] text-[7px] font-medium">In Stock</p>
                        <div class="kotak w-[22px] h-[10px] bg-[#D9D9D9] rounded-[3px] flex items-center justify-center"><i class="fa-solid fa-star text-[6px] text-[#EAB700]"></i>
                            <p class="text-[6px]">4,9</p>
                        </div>
                    </div>
                    <p class="text-[10px]">Rp. 299.000</p>
                </div>
                <div class="card-footer relative alia mt-1.5 w-[90px]">
                    <p class="text-[5px] font-sans flex justify-end mr-0.5">10rb+ Terjual</p>
                    <div class="beli w-[90px] h-[19px] bg-[#FF0000] rounded-[5px] flex items-center justify-center font-sans">
                        <p class="text-[8px] text-[white] font-semibold ">Masukkan Ke Troli</p>
                    </div>
                </div>
            </div>
            <div class="card w-[220px] h-[95px] border-[1px] rounded-[12px] border-black bg-white mt-1.5">
                <div class="card-img mt-[2.5px] ml-[2.5px]">
                    <img class="w-[106px] rounded-[15px] h-[88px] object-cover" src="{{asset('assets/alia.jpg')}}" alt="">
                </div>
                <div class="card-header relative w-[88px] alia">
                    <p class="text-[8px]">Fantech X MAHA5 ANDI ADINATA</p>
                    <div class="flex justify-between">
                        <p class="text-[red] text-[7px] font-medium">In Stock</p>
                        <div class="kotak w-[22px] h-[10px] bg-[#D9D9D9] rounded-[3px] flex items-center justify-center"><i class="fa-solid fa-star text-[6px] text-[#EAB700]"></i>
                            <p class="text-[6px]">4,9</p>
                        </div>
                    </div>
                    <p class="text-[10px]">Rp. 299.000</p>
                </div>
                <div class="card-footer relative alia mt-1.5 w-[90px]">
                    <p class="text-[5px] font-sans flex justify-end mr-0.5">10rb+ Terjual</p>
                    <div class="beli w-[90px] h-[19px] bg-[#FF0000] rounded-[5px] flex items-center justify-center font-sans">
                        <p class="text-[8px] text-[white] font-semibold ">Masukkan Ke Troli</p>
                    </div>
                </div>
            </div>
          </div>

            <div class="card w-[100px] h-[195px] border-[1px] rounded-[12px] border-black bg-white ml-2">
                <div class="card-img mt-[2.5px] flex justify-center">
                    <img class="w-[90px] rounded-[15px] h-[85px] object-cover" src="{{asset('assets/all.jpg')}}" alt="">
                </div>
                <div class="card-header w-[88px] ml-1.5">
                    <p class="text-[8px]">Fantech X MAHA5 ALL TALENT</p>
                    <div class="flex justify-between">
                        <p class="text-[red] text-[7px] font-medium">In Stock</p>
                        <div class="kotak w-[22px] h-[10px] bg-[#D9D9D9] rounded-[3px] flex items-center justify-center"><i class="fa-solid fa-star text-[6px] text-[#EAB700]"></i>
                            <p class="text-[6px]">4,9</p>
                        </div>
                    </div>
                    <p class="text-[10px]">Rp. 299.000</p>
                </div>
                <div class="card-footer ml-1 mt-6 w-[90px]">
                    <p class="text-[5px] font-sans flex justify-end mr-0.5">10rb+ Terjual</p>
                    <div class="beli w-[90px] h-[19px] bg-[#FF0000] rounded-[5px] flex items-center justify-center font-sans">
                        <p class="text-[8px] text-[white] font-semibold ">Masukkan Ke Troli</p>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
    <div class="footer w-full bg-white h-full mt-4 rounded-t-lg">
        <div class="ml-4">
        <div class="footer-img relative top-3">
            <img src="{{asset('assets/logo.jpg')}}" alt="">
        </div>
        <p class="mt-5 text-[15px]  font-light">Question?</p>
        <p class="text-[18px]  font-bold">0812345678</p>
        <p class="mt-2 text-[15px]  font-light">Follow Us</p>
        <div class="flex mt-2">
       <a href="#"> <i class="fa-brands fa-facebook text-[25px] text-[blue]"></i> </a>
       <a href="#"> <i class="fa-brands fa-x-twitter text-[25px] ml-2"></i> </a>
        <a href="#"> <i class="fa-brands fa-youtube text-[25px] text-[red] ml-2"></i> </a>
        <a href="#"> <i class="fa-brands fa-instagram text-[25px] ml-2"></i> </a>
     </div>
     <p class="text-[18px] font-bold mt-2">Our Store</p>
     <p class="mt-2 text-[15px]  font-light w-[320px]">Fantech Indonesia Sedayu Square Blok J No. 27 Jl. Lingkar Luar Barat Cengkareng - Jakarta Barat 11730</p>
     <p class="text-[18px] font-bold mt-2">Dealer Welcome</p>
     <p class="mt-2 text-[15px]  font-light w-[320px]">CV. GOLDEN TECHNOLOGY INDO
Sedayu Square Blok J no. 26 Jl. Lingkar Luar Barat Cengkareng
Jakarta Barat 11730
sales@goldentech.id marketingfantech@gmail.com
Text for more in Sales 1: +62 852-8333-3267 Sales 2: +62 811-1903-2720</p>
<p class="mt-6 text-[15px]  font-light w-full mb-2">Copyright © 2023 Fantech. All Rights Reserved</p>
        </div>
        <div class="w-full h-[15px] bg-[red]"></div>
    </div>
        
    </div>


</body>

</html>