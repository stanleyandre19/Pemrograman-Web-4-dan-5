@extends('layout')

@section('content')
<div x-data="mapelManager()" class="p-2">
    
    <div class="mb-6 flex justify-between items-end">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Daftar Mata Pelajaran [ Kelas 4 ]</h2>
            <p class="text-gray-500 text-sm italic">Kelola data muatan tematik dan non-tematik</p>
        </div>
        <button @click="bukaModal('tambah')" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl font-bold shadow-lg transition active:scale-95">
            + Tambah Data Baru
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-gray-100 p-6 rounded-2xl border border-gray-300 shadow-sm">
            <h3 class="font-bold text-gray-800 text-sm mb-4 uppercase tracking-wider">A. Muatan Tematik</h3>
            <div class="bg-white rounded-xl border border-gray-300 overflow-hidden shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-500 text-white text-xs font-bold uppercase">
                        <tr>
                            <th class="p-3 text-center border-r border-gray-400 w-12">No</th>
                            <th class="p-3 border-r border-gray-400">Nama Muatan</th>
                            <th class="p-3 text-center border-r border-gray-400 w-20">KKM</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <template x-for="(item, index) in listTematik" :key="index">
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 text-center border-r" x-text="index + 1"></td>
                                <td class="p-3 border-r font-medium" x-text="item.nama"></td>
                                <td class="p-3 text-center border-r font-bold text-blue-600" x-text="item.kkm"></td>
                                <td class="p-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <button @click="bukaModal('edit', 'tematik', index)" class="bg-orange-100 p-2 rounded-lg text-orange-600 hover:bg-orange-200">✏️</button>
                                        <button @click="hapusData('tematik', index)" class="bg-red-100 p-2 rounded-lg text-red-600 hover:bg-red-200">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-gray-100 p-6 rounded-2xl border border-gray-300 shadow-sm">
            <h3 class="font-bold text-gray-800 text-sm mb-4 uppercase tracking-wider">B. Muatan Non-Tematik</h3>
            <div class="bg-white rounded-xl border border-gray-300 overflow-hidden shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-500 text-white text-xs font-bold uppercase">
                        <tr>
                            <th class="p-3 text-center border-r border-gray-400 w-12">No</th>
                            <th class="p-3 border-r border-gray-400">Mata Pelajaran</th>
                            <th class="p-3 text-center border-r border-gray-400 w-20">KKM</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <template x-for="(item, index) in listNonTematik" :key="index">
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 text-center border-r" x-text="index + 1"></td>
                                <td class="p-3 border-r font-medium" x-text="item.nama"></td>
                                <td class="p-3 text-center border-r font-bold text-blue-600" x-text="item.kkm"></td>
                                <td class="p-3 text-center text-xl">
                                    <div class="flex justify-center space-x-2">
                                        <button @click="bukaModal('edit', 'nonTematik', index)" class="bg-orange-100 p-2 rounded-lg text-orange-600 hover:bg-orange-200">✏️</button>
                                        <button @click="hapusData('nonTematik', index)" class="bg-red-100 p-2 rounded-lg text-red-600 hover:bg-red-200">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div x-show="showModal" class="fixed inset-0 z-[10000] flex items-center justify-center bg-black bg-opacity-50 p-4" x-cloak>
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800" x-text="editMode ? 'Edit Data Mapel' : 'Tambah Data Mapel'"></h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Jenis Muatan</label>
                    <select x-model="formData.jenis" class="w-full border-2 border-gray-200 p-2 rounded-lg focus:border-blue-500 outline-none">
                        <option value="tematik">A. Muatan Tematik</option>
                        <option value="nonTematik">B. Muatan Non-Tematik</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Pelajaran</label>
                    <input type="text" x-model="formData.nama" class="w-full border-2 border-gray-200 p-2 rounded-lg focus:border-blue-500 outline-none" placeholder="Contoh: Matematika">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">KKM</label>
                    <input type="number" x-model="formData.kkm" class="w-full border-2 border-gray-200 p-2 rounded-lg focus:border-blue-500 outline-none">
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-3">
                <button @click="showModal = false" class="px-4 py-2 text-gray-500 font-bold hover:bg-gray-100 rounded-lg">Batal</button>
                <button @click="simpanData()" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-lg">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    function mapelManager() {
        return {
            showModal: false,
            editMode: false,
            editIndex: null,
            formData: { jenis: 'tematik', nama: '', kkm: 75 },
            
            listTematik: [
                { nama: 'PKN', kkm: 75 },
                { nama: 'Bahasa Indonesia', kkm: 75 },
                { nama: 'IPA', kkm: 70 }
            ],
            listNonTematik: [
                { nama: 'Pendidikan Agama', kkm: 75 },
                { nama: 'PJOK', kkm: 75 }
            ],

            bukaModal(mode, jenis = 'tematik', index = null) {
                this.showModal = true;
                this.editMode = (mode === 'edit');
                if (this.editMode) {
                    this.editIndex = index;
                    const data = this[jenis][index];
                    this.formData = { jenis: jenis, nama: data.nama, kkm: data.kkm };
                } else {
                    this.formData = { jenis: 'tematik', nama: '', kkm: 75 };
                }
            },

            simpanData() {
                if (this.formData.nama === '') return alert('Nama tidak boleh kosong!');
                
                if (this.editMode) {
                    // Update data yang sudah ada
                    this[this.formData.jenis][this.editIndex] = { nama: this.formData.nama, kkm: this.formData.kkm };
                } else {
                    // Tambah data baru
                    this[this.formData.jenis].push({ nama: this.formData.nama, kkm: this.formData.kkm });
                }
                this.showModal = false;
            },

            hapusData(jenis, index) {
                if (confirm('Yakin ingin menghapus data ini?')) {
                    this[jenis].splice(index, 1);
                }
            }
        }
    }
</script>

<style> [x-cloak] { display: none !important; } </style>
@endsection