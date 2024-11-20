<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="background w-full h-screen bg-cover bg-no-repeat flex justify-center items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('/assets/bglogin.jpg');">
        <div class="form-container w-[330px] md:w-[620px] lg:w-[730px] h-[100vh] flex flex-col">
            <div class="bg-[#FFF] min-w-full h-[405px] md:h-[765px] lg:h-[565px] m-auto xl:ml-[200px] rounded-[15px] md:rounded-[24px]">
                <img src="{{ asset('assets/logo.jpg') }}" alt="Logo" class="mx-auto mt-[25px] md:mt-[47px] lg:mt-[17px] h-[26px] md:h-[49px] lg:h-[42px]">
                <div class="w-[200px] md:w-[365px] lg:w-[315px] h-[40px] md:h-[70px] lg:h-[60px] bg-[#D9D9D9] font-bold mx-auto mt-[35px] md:mt-[65px] lg:mt-[20px] rounded-full flex flex-row items-center text-[15px] md:text-[24px]">
                    <a class="w-[97px] md:w-[185px] lg:w-[160px] h-full bg-[#E3001A] text-white text-center items-center flex justify-center ml-0 rounded-full">Log in</a>
                    <a href="{{ route('signup') }}" class="flex-grow text-center">Sign Up</a>
                </div>
                <form action="{{ url('/login') }}" method="POST" class="flex flex-col justify-center mt-[30px] md:mt-[105px] lg:mt-[75px]">
                    @csrf
                    <!-- Username Field -->
                    <input type="text" name="username" placeholder="Username" class="border-b-[2px] border-black w-[280px] md:w-[525px] lg:w-[600px] pb-[5px] mx-auto mb-[55px] md:mb-[105px] lg:mb-[72px] md:text-[20px]" value="{{ old('username') }}">
                    
                    <!-- Password Field -->
                    <input type="password" name="password" placeholder="Password" class="border-b-[2px] border-black w-[280px] md:w-[525px] lg:w-[600px] pb-[5px] mx-auto md:text-[20px]">
                    
                    <!-- Forgot Password Link -->
                    <a href="#" class="text-end mr-[25px] md:mr-[50px] lg:mr-[65px] mt-[15px] md:text-[24px] lg:text-[20px]">Forgot My Password?</a>
                    
                    <!-- Submit Button -->
                    <input type="submit" name="submit" value="Submit" class="border-black border-[1px] w-[175px] md:w-[325px] lg:w-[250px] mx-auto rounded-[15px] md:rounded-[24px] mt-[30px] md:mt-[70px] h-[40px] md:h-[75px] lg:h-[55px] md:text-[24px] lg:text-[18px] font-semibold">
                </form>

                <!-- Display Validation Errors -->
@if ($errors->any())
<div class="text-center mt-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

            </div>
        </div>
    </div>
</body>
</html>
