<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="bg-gradient-to-b from-[#420008] to-[#000000]">
    <x-Navbar />

    <div class="w-full h-full my-[100px] md:mt-[100px]  lg:my-[100px] flex">
        <form action="{{ route('admin.update', $admin->id_admin) }}" method="POST" enctype="multipart/form-data" class="relative w-[345px] flex flex-col m-auto h-[700px] bg-[#FFF] px-[32px] pt-[45px] gap-[30px] rounded-[12px]
                                   md:w-[700px] md:h-[1100px] md:px-[50px] md:pt-[90px] md:gap-[60px]
                                   lg:w-[1200px] lg:h-[700px] lg:flex-row lg:justify-between lg:gap-[60px]">
            @csrf
            @method('PUT')
            
            <!-- Container for Nama, Username, Email, Telp -->
            <div class="flex flex-col gap-[25px] md:gap-[60px] lg:gap-[70px] lg:w-1/2">
                <div class="relative">
                    <input type="text" name="nama_admin" id="nama_admin" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " value="{{ old('nama_admin', $admin->nama_admin) }}"/>
                    <label for="nama_admin" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                md:text-[24px] md:peer-focus:-translate-x-5">
                        Nama Admin
                    </label>
                </div>
            
                <div class="relative">
                    <input type="text" id="username" name="username" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " value="{{ old('username', $admin->username) }}"/>
                    <label for="username" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                    md:text-[24px] md:peer-focus:-translate-x-5">
                        Username
                    </label>
                </div>
            
                <div class="relative">
                    <input type="email" id="email" name="email" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " value="{{ old('email', $admin->email) }}"/>
                    <label for="email" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                    md:text-[24px] md:peer-focus:-translate-x-5">
                        Email
                    </label>
                </div>

                <div class="relative">
                    <input type="tel" id="telp" name="telp" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " value="{{ old('telp', $admin->telp) }}"/>
                    <label for="telp" class="absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-3
                                                    md:text-[24px] md:peer-focus:-translate-x-5">
                        Telepon
                    </label>
                </div>
            </div>
        
            <!-- Container for Photo Upload -->
            <div class="relative lg:w-1/2 flex flex-col items-center justify-center">
                <div class="w-48 h-48 mb-4 overflow-hidden rounded-full">
                    <img id="preview" 
                         src="{{ $admin->foto_admin ? asset('uploads/'.$admin->foto_admin) : asset('/images/placeholder.png') }}" 
                         alt="Admin photo" 
                         class="w-full h-full object-cover">
                </div>
                <label for="foto_admin" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Upload Foto
                </label>
                <input type="file" id="foto_admin" name="foto_admin" class="hidden" onchange="previewImage(event)">
            </div>            
            
            <!-- Submit Button -->
            <input type="submit" value="UPDATE PROFILE" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold
                                                                     md:px-[120px] md:py-[20px] md:rounded-[30px] md:text-[24px] md:mt-[10px] lg:absolute lg:bottom-[30px] lg:left-1/2 lg:transform lg:-translate-x-1/2">
        </form>
    </div>
    <div class="w-full h-[15px] bg-[#E3001A] bottom-0"></div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>