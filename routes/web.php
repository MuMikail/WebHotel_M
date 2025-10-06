<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Halaman utama
Route::get('/', function () {
    return view('beranda');
})->name('home');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Resource Booking (otomatis buat index, create, store, show, edit, update, destroy)
Route::resource('bookings', BookingController::class);
