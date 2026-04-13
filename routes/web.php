<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('login'); });
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

// Route untuk Dashboard
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/siswa', 'siswa')->name('siswa');
Route::view('/guru', 'guru')->name('guru');
Route::view('/mapel', 'mapel')->name('mapel');