<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit | password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="bg-gradient-to-b from-[#420008] to-[#000000]">
    <x-Navbar />

    <div class="w-full h-full my-[63px] mt-[20px] flex">
        <form action="" class="relative w-[345px] flex flex-col m-auto h-[645px] bg-[#FFF] px-[32px] pt-[45px] gap-[40px] rounded-[12px]
                                   md:w-[700px] md:h-[1000px] md:px-[50px] md:pt-[90px] md:gap-[80px]
                                   lg:w-[1200px] lg:h-[570px] lg:flex-row lg:justify-between lg:gap-[60px]">
            
            <!-- Container for Nama, Harga, Stok -->
            <div class="flex flex-col gap-[35px] md:gap-[80px] lg:gap-[90px] lg:w-full">
                <div class="relative">
                    <input type="text" name="password" id="nama_barang" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" "/>
                    <label for="nama_barang" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                                                md:text-[24px]">
                        Current Password
                    </label>
                </div>
            
                <div class="relative">
                    <input type="email" id="harga_barang" name="email" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" "/>
                    <label for="harga_barang" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                                                    md:text-[24px]">
                        Email
                    </label>
                </div>
            
                <div class="relative">
                    <input type="text" id="stok_barang" name="new_password" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" "/>
                    <label for="stok_barang" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6
                                                    md:text-[24px]">
                        New Password
                    </label>
                </div>
            </div>
        
            <!-- Submit Button -->
            <input type="submit" value="SUBMIT" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold
                                                                     md:px-[120px] md:py-[20px] md:rounded-[30px] md:text-[24px] md:mt-[10px] lg:absolute lg:bottom-[30px] lg:left-1/2 lg:transform lg:-translate-x-1/2">
        </form>
    </div>
    
    <div class="w-full h-[15px] bg-[#E3001A] -mt-[100px]"></div>
</body>
