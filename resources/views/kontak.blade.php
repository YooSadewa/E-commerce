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

<body class="bg-gray-200">
    <x-Navbaradmin />

    <!-- Breadcrumb -->
    <div class="py-4 px-6 mt-20">
        <p class="text-gray-600"><span class="font-semibold">Home</span> / <span class="font-semibold">Contact Us</span></p>
    </div>

    <!-- Contact Us Title -->
    <div class="bg-blue-600 py-8">
        <h1 class="text-center text-3xl font-bold text-white">Contact Us</h1>
    </div>

    <!-- Content Section -->
    <div class="flex flex-col md:flex-row justify-center px-6 py-12 gap-8">
        <!-- Pertanyaan Section -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full md:w-1/2">
            <h2 class="text-center text-gray-600 text-2xl font-semibold">Pusat Penjualan Produk</h2>
            <h3 class="text-center text-2xl font-bold text-red-600">Pertanyaan Penjualan dan Produk</h3>
            <p class="text-gray-700 mt-4 text-sm">
                Untuk melakukan pembelian produk-produk Fantech, Anda bisa langsung kunjungi Fantech Experience Store yang merupakan pusat penjualan dengan persediaan produk terlengkap. Fantech Experience Store mampu memberikan pengalaman berbelanja yang menyenangkan dengan merasakan secara langsung produk-produk Fantech yang akan Anda beli.
            </p>
            <img src="https://fantech.id/wp-content/uploads/2024/06/Fantech-eXperience-Store.jpg" alt="Store Image" class="mt-4 rounded-lg shadow-md w-full">
        </div>

        <!-- Dukungan Section -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full md:w-1/2">
            <h2 class="text-center text-gray-600 text-2xl font-semibold">Pusat Dukungan</h2>
            <h3 class="text-center text-2xl font-bold text-red-600">Dukungan Penjualan dan Produk</h3>
            <p class="text-gray-700 mt-4 text-sm">
                Untuk melakukan pembelian produk-produk Fantech, Anda bisa langsung kunjungi Fantech Experience Store yang merupakan pusat penjualan dengan persediaan produk terlengkap. Fantech Experience Store mampu memberikan pengalaman berbelanja yang menyenangkan dengan merasakan secara langsung produk-produk Fantech yang akan Anda beli.
            </p>
            <ul class="text-gray-700 mt-4 text-sm list-decimal ml-4">
                <li>Mendapatkan Gear yang mantap dan auto gacor bejir</li>
                <li>Mendapatkan Berkah dari TUHAN</li>
                <li>Mendapatkan Benefit yaitu Smoothnya mouseku Gacor kang</li>
            </ul>
        </div>
    </div>`
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <x-Footer />
</body>

</html>
