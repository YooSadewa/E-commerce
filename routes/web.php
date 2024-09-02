<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcomeadmin');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/admin/profile', function () {
    return view('admin/profile');
})->name('profile');

Route::resource('barang', BarangController::class);

Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

Route::get('/profile', [AdminController::class, 'show'])->name('profile');

// Mengarahkan /admin/infoproduct ke BarangController@index
Route::get('/infoproduct', [BarangController::class, 'showInfoProduct'])->name('infoproduct');
