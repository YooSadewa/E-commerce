<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('welcomeadmin');
// });

Route::get('/admin', function() {
    return view('welcomeadmin');
})->name('admin');

Route::get('/login', [AdminController::class,'indexlogin'])->name('login');

Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::post('/login/admin', [AdminController::class,'login']);

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/admin/profile', function () {
    return view('admin/profile');
})->name('profile');

Route::resource('barang', BarangController::class);

Route::get('/admin/{id_admin}', [AdminController::class, 'show'])->name('admin.show');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

Route::get('/profile', [AdminController::class, 'show'])->name('profile');

// Mengarahkan /admin/infoproduct ke BarangController@index
Route::get('/infoproduct', [BarangController::class, 'showInfoProduct'])->name('infoproduct');
