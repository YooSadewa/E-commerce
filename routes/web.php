<?php
use App\Http\Controllers\FooterController;
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

// Mengarahkan /admin/infoproduct ke BarangController@index
Route::get('/admin/infoproduct', [BarangController::class, 'index'])->name('infoproduct');

Route::get('/editproduct', function () {
    return view('barang.edit');
})->name('editproduct');

Route::get('/tambahproduct', function () {
    return view('barang.tambah');
})->name('tambahproduct');

Route::resource('footers', FooterController::class);

Route::get('/editfooter', function () {
    return view('footer.edit');
})->name('editfooter');
