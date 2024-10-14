<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>
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
        <form action="{{ route('admin.updatePass', $admin->id_admin) }}" method="POST" class="relative w-[345px] flex flex-col m-auto h-[645px] bg-[#FFF] px-[32px] pt-[45px] gap-[40px] rounded-[12px]
            md:w-[700px] md:h-[1000px] md:px-[50px] md:pt-[90px] md:gap-[80px]
            lg:w-[1200px] lg:h-[570px] lg:flex-row lg:justify-between lg:gap-[60px]">
            
            <!-- Tambahkan CSRF Token dan method PUT -->
            @csrf
            @method('PUT')
            <!-- Container for Password, Email, and New Password -->
            <div class="flex flex-col gap-[35px] md:gap-[80px] lg:gap-[90px] lg:w-full">
                <!-- Input for Current Password -->
                <div class="relative">
                    <input type="password" name="password" id="current_password" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " required/>
                    <label for="current_password" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 md:text-[24px]">
                        Current Password
                    </label>
                </div>
            
                <!-- Input for Email -->
                <div class="relative">
                    <input type="email" id="email" name="email" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " required/>
                    <label for="email" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 md:text-[24px]">
                        Email
                    </label>
                </div>
            
                <!-- Input for New Password -->
                <div class="relative">
                    <input type="password" id="new_password" name="new_password" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " required/>
                    <label for="new_password" class="absolute left-1/2 transform -translate-x-1/2 text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 md:text-[24px]">
                        New Password
                    </label>
                </div>
            </div>
        
            <!-- Submit Button -->
            <input type="submit" value="SUBMIT" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold
                                                                     md:px-[120px] md:py-[20px] md:rounded-[30px] md:text-[24px] md:mt-[10px] lg:absolute lg:bottom-[30px] lg:left-1/2 lg:transform lg:-translate-x-1/2">
        </form>
    </div>
    @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-4 mx-[20px]">
                    {{ session('success') }}
                </div>
            @endif
    
            <!-- Display Error Messages -->
            @if($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mb-4 mx-[20px]">
                    {{ $errors->first() }}
                </div>
            @endif
</body>
