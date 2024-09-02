<?php

use App\Http\Controllers\BarangController;
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

Route::get('/infoproduct', function () {
    return view('admin.infoproduct');
})->name('infoproduct');

// Route::get('/admin/profile', function () {
//     return view('admin/profile');
// })->name('profile');

Route::resource('barang', BarangController::class);

// Mengarahkan /admin/infoproduct ke BarangController@index
Route::get('/admin/infoproduct', [BarangController::class, 'index'])->name('admin.infoproduct');


use App\Http\Controllers\AccountController;

Route::get('/profile', [AccountController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [AccountController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [AccountController::class, 'update'])->name('profile.update');
Route::post('/profile/update-password', [AccountController::class, 'updatePassword'])->name('profile.updatePassword');
