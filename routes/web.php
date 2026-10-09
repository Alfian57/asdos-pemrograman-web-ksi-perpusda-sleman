<?php

use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan halaman beranda
Route::get('/beranda', function () {
    return view('beranda');
});

// Route untuk menampilkan daftar buku
Route::get('/buku', function () {
    return view('buku');
});

// Route untuk menampilkan halaman tentang kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
