<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $data = "Selamat Datang di Halaman Home";
    $angka = 5;
    return view('home', compact('data', 'angka'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);