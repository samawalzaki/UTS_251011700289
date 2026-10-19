
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandmadeController;

// Halaman Beranda
Route::view('/', 'home')->name('home');

// Halaman Koleksi Produk
Route::get('/koleksi', [HandmadeController::class, 'index'])
    ->name('handmade.index');

// Detail Produk
Route::get('/produk/{id}', [HandmadeController::class, 'show'])
    ->name('handmade.detail');

// Halaman Tentang Kami
Route::view('/tentang', 'about')->name('about');

// Halaman Profil
Route::view('/profil', 'profile')->name('profile');
