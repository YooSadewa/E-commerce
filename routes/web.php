<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BarangController::class, 'indexUser'])->name('welcome');

Route::get('/admin', [BarangController::class, 'index'])->name('welcomeadmin');

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::post('/login/admin', [AdminController::class,'login']);

Route::get('/admin/editprofile/{id}', [AdminController::class, 'edit'])->name('admin.editprofile');
Route::put('/admin/editprofile/{id}', [AdminController::class, 'update'])->name('admin.update');

Route::get('/signup', function () { 
    return view('signup');
})->name('signup');

Route::get('/profileuser', [UserController::class, 'show'])->name('profileuser');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

Route::resource('profile', UserController::class);

Route::resource('barang', BarangController::class);

Route::get('/admin/{id_admin}', [AdminController::class, 'show'])->name('admin.show');

Route::put('/barang/{id_barang}', [BarangController::class, 'update'])->name('barang.update');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

Route::get('/profile', [AdminController::class, 'show'])->name('profile');

Route::get('/infoproduct/{id_barang}', [BarangController::class, 'show'])->name('infoproduct.show');

Route::get('/infoproductuser/{id_barang}', [BarangController::class, 'showuser'])->name('infoproductuser.show');

Route::get('/category/{category}', [BarangController::class, 'showCategory'])->name('category.show');

Route::get('/categoryuser/{category}', [BarangController::class, 'showCategoryUser'])->name('categoryuser.show');

Route::get('/search', [BarangController::class, 'indexSearch'])->name('product.search');

Route::get('/admin/editpass/{id}', [AdminController::class, 'editPass'])->name('admin.editpass');
Route::put('/admin/updatePass/{id}', [AdminController::class, 'updatePass'])->name('admin.updatePass');

Route::get('/about', [AdminController::class, 'indexAbout'])->name('index.about');
Route::get('/kontak', [AdminController::class, 'indexKontak'])->name('index.kontak');

Route::get('/cart', [UserController::class, 'showCart'])->name('cart');
Route::middleware('auth')->group(function() {
    Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
    
    Route::get('user/{id}/password', [UserController::class, 'editPassword'])->name('user.editpass');
    Route::put('user/{id}/password', [UserController::class, 'updatePassword'])->name('user.updatepass');
    
    Route::get('user/{id}/location', [UserController::class, 'editLocation'])->name('user.editLocation');
    Route::put('user/{id}/location', [UserController::class, 'updateLocation'])->name('user.updateLocation');
    
    // Log out route
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
