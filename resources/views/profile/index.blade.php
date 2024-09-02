@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-black to-red-800">
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-md w-full">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('path-to-image.jpg') }}" alt="Profile Picture" class="rounded-full h-24 w-24 object-cover">
        </div>
        <h2 class="text-center text-lg font-semibold mb-2">Kia Cobels</h2>
        <p class="text-center text-sm text-gray-600 mb-6">081935427459</p>

        <a href="{{ route('profile.update') }}" class="block bg-gray-100 text-gray-800 py-2 px-4 rounded-lg font-semibold mb-3 flex items-center">
            <img src="{{ asset('path-to-update-icon.png') }}" alt="Profile Update" class="h-4 w-4 mr-2"> Profile Update
        </a>
        <a href="{{ route('password.update') }}" class="block bg-gray-100 text-gray-800 py-2 px-4 rounded-lg font-semibold mb-3 flex items-center">
            <img src="{{ asset('path-to-password-icon.png') }}" alt="Password Update" class="h-4 w-4 mr-2"> Password Update
        </a>
        <a href="{{ route('item.add') }}" class="block bg-gray-100 text-gray-800 py-2 px-4 rounded-lg font-semibold mb-6 flex items-center">
            <img src="{{ asset('path-to-add-item-icon.png') }}" alt="Tambah Barang" class="h-4 w-4 mr-2"> Tambahkan Barang
        </a>

        <a href="{{ route('logout') }}" class="block bg-red-600 text-white py-2 px-4 rounded-lg font-semibold text-center">LOG OUT</a>
    </div>
</div>
@endsection
