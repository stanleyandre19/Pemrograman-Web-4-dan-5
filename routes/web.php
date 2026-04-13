<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Rapot Siswa
|--------------------------------------------------------------------------
*/

Route::view('/', 'home');        // Halaman utama
Route::view('/home', 'home');    // Home
Route::view('/about', 'about');  // Tentang sistem