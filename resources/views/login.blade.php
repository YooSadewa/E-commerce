<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <div class="background" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('/assets/bglogin.jpg');">
        <div class="form-container w-[330px] h-[100vh] m-auto flex flex-column">
            <div class="w-full bg-[#FFF] h-[405px] m-auto rounded-[15px]">
                <img src="{{ asset('assets/logo.jpg') }}" alt="" class="mx-auto mt-[25px]">
                <div class="w-[200px] h-[40px] bg-[#D9D9D9] font-bold mx-auto mt-[35px] rounded-full flex flex-row items-center">
                    <button class="w-[97px] h-[40px] bg-[#E3001A] text-white text-center items-center flex justify-center ml-0 rounded-full">Log in</button>
                    <button class="flex-grow text-center">Sign Up</button>
                </div>
                <form action="" class="flex flex-col justify-center mt-[30px]">
                    <input type="text" placeholder="Username" class="border-b-[2px] border-black w-[280px] pb-[5px] mx-auto mb-[55px]">
                    <input type="text" placeholder="Password" class="border-b-[2px] border-black w-[280px] pb-[5px] mx-auto">
                    <a href="#" class="text-end mr-[25px] mt-[15px]">Forgot My Password?</a>
                    <input type="submit" value="Submit" class="border-black border-[1px] w-[175px] mx-auto rounded-[15px] mt-[30px] h-[40px]">
                </form>
            </div>
        </div>
    </div>
</body>
</html>