<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white h-screen flex flex-col">

        <div class="flex items-center justify-between p-4 bg-white shadow-md">
            <button class="text-xl text-gray-800 font-bold">

                &#8592;
            </button>

            <h1 class="text-xl font-bold text-center flex-grow">CART</h1>
        </div>


        <hr class="border-gray-900">


        <div class="bg-white flex-grow overflow-y-auto">

            <div class="flex  items-center justify-between border-b border-gray-900 p-4">
                <img src="https://pm1.aminoapps.com/8311/2ddf6360215b3efbf1de8d7656d59c87049732e7r1-640-640v2_00.jpg" alt="Item 1" class="w-20 h-auto rounded-lg object-cover">
                <div class="flex-grow ml-4">
                    <h2 class=" text-gray-900 text-sm">Fantech ATOM96 MK890V2</h2>
                    <p class="font-bold text-xs">Rp. 399.000</p>
                </div>
                <button class="text-gray-300 text-sm mb-14 ">Delete</button>
            </div>


            <div class="flex items-center justify-between border-b border-gray-900 p-4">
                <img src="https://pm1.aminoapps.com/8311/2ddf6360215b3efbf1de8d7656d59c87049732e7r1-640-640v2_00.jpg" alt="Item 2" class="w-20 h-auto rounded-lg object-cover">
                <div class="flex-grow ml-4">
                    <h2 class=" text-gray-900 text-sm">Fantech THIO89 XYPEV2</h2>
                    <p class="font-bold text-xs">Rp. 179.000</p>
                </div>
                <button class="text-gray-300 text-sm mb-14 ">Delete</button>
            </div>
        </div>

        <hr class="border-gray-900 ">

        <div class="bg-white shadow-md">
            <div class="flex items-center justify-between text-white">
                <div class="flex items-center bg-white">
                    <h2 class="font-bold text-sm text-black mr-2 pl-3 ">Total :</h2>
                    <p class="font-bold text-sm text-red-600">Rp 578.000</p>
                </div>
                <button class="bg-red-600 text-white font-bold px-6 py-2">
                    Checkout (2)
                </button>
            </div>


            <hr class="bg-red-600 h-8 border-red-600">

        </div>



    </div>

</body>

</html>

<script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>