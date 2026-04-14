@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Rapor Siswa</h2>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tombol tambah --}}
    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
        + Tambah Data Rapor
    </a>

    {{-- Tabel Data --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->mata_pelajaran }}</td>
                            <td>{{ $item->nilai }}</td>
                            <td>
                                @if($item->nilai >= 90)
                                    A
                                @elseif($item->nilai >= 80)
                                    B
                                @elseif($item->nilai >= 70)
                                    C
                                @else
                                    D
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $item->id) }}" 
                                   class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('product.destroy', $item->id) }}" 
                                      method="POST" 
                                      style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data rapor belum tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection