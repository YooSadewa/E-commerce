@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-black to-red-800">
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-md w-full">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('path-to-image.jpg') }}" alt="Profile Picture" class="rounded-full h-24 w-24 object-cover">
            <div class="absolute bg-white p-1 rounded-full -mt-8 ml-16 cursor-pointer">
                <img src="{{ asset('path-to-edit-icon.png') }}" alt="Edit" class="h-4 w-4">
            </div>
        </div>
        <h2 class="text-center text-lg font-semibold mb-6">Profile Update</h2>
        
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Username</label>
                <input type="text" name="username" class="w-full border-b border-gray-300 focus:outline-none focus:border-red-600" value="{{ old('username', 'Kia Cobels') }}">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Nomor Telepon</label>
                <input type="text" name="no_telp" class="w-full border-b border-gray-300 focus:outline-none focus:border-red-600" value="{{ old('no_telp', '08193527459') }}">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full border-b border-gray-300 focus:outline-none focus:border-red-600" value="{{ old('email', 'sigmakia@gmail.com') }}">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium">Tanggal Lahir</label>
                <div class="relative">
                    <input type="text" name="birthdate" class="w-full border-b border-gray-300 focus:outline-none focus:border-red-600" value="{{ old('birthdate', '29 Februari 2008') }}">
                    <span class="absolute right-0 top-0 mt-2 mr-2">
                        <img src="{{ asset('path-to-calendar-icon.png') }}" alt="Calendar" class="h-4 w-4">
                    </span>
                </div>
            </div>

            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold">SUBMIT</button>
        </form>
    </div>
</div>
@endsection
