<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Rapot Siswa
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');

// Auth
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

// Dashboard & fitur
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/siswa', 'siswa')->name('siswa');
Route::view('/guru', 'guru')->name('guru');
Route::view('/mapel', 'mapel')->name('mapel');