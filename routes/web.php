<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::resource('barang', BarangController::class);

// Mengarahkan /admin/infoproduct ke BarangController@index
Route::get('/admin/infoproduct', [BarangController::class, 'index'])->name('infoproduct');
