<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [BarangController::class, 'index'])->name('welcomeadmin');

Route::get('/loginadmin', [AdminController::class,'indexlogin'])->name('login');

Route::get('/login', [AdminController::class,'indexloginUser'])->name('loginuser');

Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::post('/login/admin', [AdminController::class,'login']);

Route::get('/admin/edit', [AdminController::class, 'indexUpdate'])->name('admin.editprofile');

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

Route::get('/infoproduct/{id_barang}', [BarangController::class, 'show'])->name('infoproduct.show');
