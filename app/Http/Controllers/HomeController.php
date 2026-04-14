<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fungsi ambil data
    public function getData()
    {
        $data = [
            "nama_aplikasi" => "Rapor.id",
            "kampus" => "Politeknik Negeri Batam",
            "pengguna" => ["Admin TU", "Guru", "Wali Kelas"]
        ];

        return $data;
    }

    // Fungsi tampilkan ke view
    public function tampilkan()
    {
        $data = $this->getData(); // ambil data

        return view('home', $data); // kirim ke view
    }
}