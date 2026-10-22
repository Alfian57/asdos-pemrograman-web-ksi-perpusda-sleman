<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan halaman beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

// Route untuk menampilkan daftar buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku');

// Route untuk menampilkan halaman tentang kami
Route::get('/tentang-kami', [BerandaController::class, 'tentangKami'])->name('tentang-kami');
