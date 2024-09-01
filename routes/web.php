<?php
use App\Http\Controllers\FooterController;
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

Route::get('/infoproduct', function () {
    return view('infoproduct');
})->name('infoproduct');

Route::resource('barang', BarangController::class);

Route::get('/editproduct', function () {
    return view('barang.edit');
})->name('editproduct');

Route::get('/tambahproduct', function () {
    return view('barang.tambah');
})->name('tambahproduct');