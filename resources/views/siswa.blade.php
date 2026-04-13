@extends('layout')

@section('content')
<div x-data="{ showModal: false, nama: '', nisn: '' }">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Siswa [ Kelas 4 ]</h2>
        <button @click="showModal = true" class="bg-white border-2 border-gray-300 px-6 py-2 rounded-xl font-bold hover:bg-gray-50 transition active:scale-95 shadow-sm">
            + Tambah Siswa
        </button>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-4 bg-gray-50 border-b flex space-x-3">
            <input type="text" placeholder="Search..." class="border rounded-lg px-4 py-1.5 text-sm outline-none focus:border-blue-500 w-64">
            <select class="border rounded-lg px-4 py-1.5 text-sm bg-white outline-none">
                <option>Kelas - 4 A</option>
                <option>Kelas - 4 B</option>
                <option>Kelas - 5 A</option>
            </select>
        </div>
        
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-xs font-bold text-gray-500 uppercase tracking-wider">
                <tr>
                    <th class="p-4 w-16">No.</th>
                    <th class="p-4">Nama Siswa</th>
                    <th class="p-4">NISN / NIP</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                <tr class="hover:bg-blue-50 transition">
                    <td class="p-4 text-gray-600">1</td>
                    <td class="p-4 font-bold text-gray-800 uppercase">Ahmad Syauqi</td>
                    <td class="p-4 text-gray-500 tracking-widest">1320025021</td>
                    <td class="p-4 text-center">
                        <div class="flex justify-center space-x-4">
                            <button @click="alert('Membuka form edit Ahmad Syauqi')" class="text-orange-500 font-bold hover:underline">Edit</button>
                            <button @click="confirm('Yakin ingin menghapus data ini?')" class="text-red-500 font-bold hover:underline">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div x-show="showModal" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 p-4" x-cloak>
        <div class="bg-white rounded-2xl w-full max-w-md p-6 shadow-2xl">
            <h3 class="text-xl font-bold mb-4">Tambah Siswa Baru</h3>
            <div class="space-y-4">
                <input type="text" x-model="nama" placeholder="Nama Lengkap" class="w-full border p-3 rounded-xl outline-none focus:ring-2 ring-blue-500">
                <input type="number" x-model="nisn" placeholder="NISN" class="w-full border p-3 rounded-xl outline-none focus:ring-2 ring-blue-500">
            </div>
            <div class="flex justify-end mt-6 space-x-3">
                <button @click="showModal = false" class="px-4 py-2 text-gray-500 font-bold">Batal</button>
                <button @click="alert('Data ' + nama + ' berhasil ditambahkan (Mockup)'); showModal = false" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-xl">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<style>
    [x-cloak] { display: none !important; }
</style>
@endsection