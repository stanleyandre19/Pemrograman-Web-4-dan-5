@extends('layout')

@section('content')
<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-800">Ringkasan Data Pendidikan </h2>
    <p class="text-gray-500">Data Pintar Untuk Pendidikan Yang Lebih Baik</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center hover:shadow-md transition">
        <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-2xl mr-4">
            👤
        </div>
        <div>
            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Total Siswa</p>
            <p class="text-3xl font-black text-gray-800">1108</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center hover:shadow-md transition">
        <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mr-4">
            👨‍🏫
        </div>
        <div>
            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Total Guru</p>
            <p class="text-3xl font-black text-gray-800">25</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center hover:shadow-md transition">
        <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center text-2xl mr-4">
            📚
        </div>
        <div>
            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Mata Pelajaran</p>
            <p class="text-3xl font-black text-gray-800">10</p>
        </div>
    </div>
</div>

<div class="bg-blue-600 p-8 rounded-3xl text-white shadow-xl flex justify-between items-center">
    <div>
        <h3 class="text-2xl font-bold mb-2">Selamat Datang, Admin! 👋</h3>
        <p class="opacity-90 max-w-md">Sistem Pengelolahan Raport Siswa </p>
    </div>
    <div class="hidden lg:block opacity-20 text-8xl">
        🏫
    </div>
</div>
@endsection