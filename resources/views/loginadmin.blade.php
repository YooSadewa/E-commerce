<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            right: 0;
        }
    </style>
</head>



<body class="">
    <div class="background w-100% h-100vh bg-cover bg-no-repeat justify-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('/assets/bglogin.jpg');">
        <div class="form-container w-[330px] md:w-[620px] lg:w-[730px] h-[100vh] m-auto flex flex-col">
            <div class="bg-[#FFF] min-w-full h-[405px] md:h-[765px] lg:h-[565px] m-auto xl:ml-[200px] rounded-[15px] md:rounded-[24px]">
                <img src="{{ asset('assets/logo.jpg') }}" alt="" class="mx-auto mt-[25px] md:mt-[47px] lg:mt-[17px] h-[26px] md:h-[49px] lg:h-[42px]">
                <div class="w-[200px] md:w-[365px] lg:w-[315px] h-[40px] md:h-[70px] lg:h-[60px] bg-[#D9D9D9] font-bold mx-auto mt-[35px] md:mt-[65px] lg:mt-[20px] rounded-full flex flex-row items-center text-[15px] md:text-[24px]">
                    <a class="w-full h-full bg-[#E3001A] text-white text-center items-center flex justify-center ml-0 rounded-full">Log in</a>
                </div>
                <form action="{{ route('admin.login') }}" method="POST" class="flex flex-col justify-center mt-[30px] md:mt-[105px] lg:mt-[75px]">
                    @csrf
                    <div class="relative px-[30px] md:px-[50px] mt-[20px] md:mt-0 mb-[40px] md:mb-[60px]">
                        <input type="text" id="username" name="username" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " required />
                        <label for="username" class="pl-[30px] md:pl-[50px] absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-8
                                                    md:text-[24px] md:peer-focus:-translate-x-[60px] lg:peer-focus:-translate-x-[75px]">
                            Username
                        </label>
                    </div>
                    <div class="relative px-[30px] md:px-[50px]">
                        <input type="password" id="password" name="password" class="peer border-b-[1px] border-black w-full placeholder-transparent focus:outline-none focus:border-blue-500 mt-[5px] md:text-[24px]" placeholder=" " required />
                        <label for="password" class="pl-[30px] md:pl-[50px] absolute text-base text-[#000] duration-300 transform -translate-y-6 scale-75 top-1 left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:-translate-x-8
                                                    md:text-[24px] md:peer-focus:-translate-x-[60px] lg:peer-focus:-translate-x-[75px]">
                            Password
                        </label>
                    </div>
                    <input type="submit" value="SUBMIT" class="px-[60px] py-[10px] bg-[#FFF] hover:bg-[#E3001A] border-[2px] duration-[0.2s] border-[#E3001A] w-fit mx-auto mt-[30px] rounded-[15px] text-[#E3001A] hover:text-[#FFF] font-bold
                                                                md:px-[120px] md:py-[20px] md:rounded-[30px] md:text-[24px] md:mt-[100px] lg:w-[300px] lg:mt-[60px] lg:px-0 lg:mb-[40px]">
                </form>
            </div>
        </div>
    </div>
</body>
</html>