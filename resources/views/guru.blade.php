@extends('layout')

@section('content')
<div x-data="{ showModal: false, nama: '', nip: '', mapel: '' }">
    
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">Daftar Guru Pengajar</h2>
        
        <button @click="showModal = true" class="bg-gray-100 hover:bg-gray-200 border-2 border-gray-400 px-6 py-2.5 rounded-xl font-bold flex items-center transition shadow-sm active:scale-95">
            <span class="mr-2 text-xl">+</span> Tambah Guru
        </button>
    </div>

    <div class="bg-white rounded-2xl border-2 border-gray-100 p-12 text-center shadow-sm">
        <p class="text-gray-400 italic text-lg font-medium">Data guru akan muncul di sini sesuai desain Rapor.id</p>
    </div>

    <div x-show="showModal" 
         class="fixed inset-0 z-[10000] flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm p-4" 
         x-cloak>
        
        <div @click.away="showModal = false" class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden transform transition-all">
            <div class="bg-blue-600 p-6 text-white flex justify-between items-center">
                <h3 class="text-xl font-bold">Tambah Guru Baru</h3>
                <button @click="showModal = false" class="text-2xl font-bold leading-none opacity-70 hover:opacity-100">&times;</button>
            </div>

            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Nama Lengkap</label>
                    <input type="text" x-model="nama" placeholder="Contoh: Budi Santoso, S.Pd" class="w-full border-2 border-gray-100 p-3 rounded-xl focus:border-blue-500 outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-1">NIP</label>
                    <input type="number" x-model="nip" placeholder="Masukkan NIP" class="w-full border-2 border-gray-100 p-3 rounded-xl focus:border-blue-500 outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Mengajar Mapel</label>
                    <select x-model="mapel" class="w-full border-2 border-gray-100 p-3 rounded-xl focus:border-blue-500 outline-none transition">
                        <option value="">Pilih Mata Pelajaran</option>
                        <option>Matematika</option>
                        <option>Bahasa Indonesia</option>
                        <option>IPA</option>
                        <option>Agama</option>
                        <option>IPS</option>
                    </select>
                </div>
            </div>

            <div class="p-6 bg-gray-50 flex justify-end space-x-3">
                <button @click="showModal = false" class="px-5 py-2.5 text-gray-500 font-bold hover:text-gray-700">Batal</button>
                <button @click="alert('Berhasil! Data ' + nama + ' terinput (Visual Mockup)'); showModal = false" 
                        class="px-8 py-2.5 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 shadow-lg transition active:scale-95">
                    Simpan Guru
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<style>
    [x-cloak] { display: none !important; }
</style>
@endsection