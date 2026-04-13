<?php
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () { return view('login'); });
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

// Route untuk Dashboard
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/siswa', 'siswa')->name('siswa');
Route::view('/guru', 'guru')->name('guru');
Route::view('/mapel', 'mapel')->name('mapel');
=======
/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Rapot Siswa
|--------------------------------------------------------------------------
*/

Route::view('/', 'home');        // Halaman utama
Route::view('/home', 'home');    // Home
Route::view('/about', 'about');  // Tentang sistem
>>>>>>> 7d1d93d69e1ba52f5feb87a8d65e7b9676125759
