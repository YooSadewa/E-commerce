<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Fantech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white rounded-lg shadow-md w-96">
        <!-- Header Section -->
        <div class="bg-red-700 text-white text-center p-6 relative">
            <img class="w-20 h-20 mx-auto rounded-full mb-3" src="https://via.placeholder.com/150" alt="Profile Picture">
            <h2 class="text-lg font-semibold">Kia Cobels</h2>
            <p class="text-sm">081935427459</p>
        </div>

        <!-- Content Section -->
        <div class="p-6">
            <!-- Profile Update Button -->
            <button class="w-full bg-gray-100 text-black border-2 border-black py-2 px-4 rounded-md mb-4 hover:bg-gray-200">
                Profile Update
            </button>

            <!-- Password Update Button -->
            <button class="w-full bg-gray-100 text-black border-2 border-black py-2 px-4 rounded-md mb-4 hover:bg-gray-200">
                Password Update
            </button>

            <!-- Location Section -->
            <div class="text-center text-gray-600 text-sm mb-4">
                <strong>Location:</strong> <br>
                Sedayu Square Blok J No. 27-28 <br>
                Jl. Lingkar Luar Barat, Cengkareng <br>
                Jakarta Barat 11730
            </div>

            <!-- Change Location Button -->
            <button class="w-full bg-gray-100 text-black border-2 border-black py-2 px-4 rounded-md hover:bg-gray-200">
                Change Location
            </button>
        </div>

        <!-- Log Out Button -->
        <div class="text-center py-4 text-red-700 font-semibold cursor-pointer hover:underline">
            LOG OUT
        </div>
    </div>

</body>

</html>