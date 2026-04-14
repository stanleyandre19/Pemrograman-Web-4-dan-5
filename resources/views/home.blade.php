<!DOCTYPE html>
<html>
<head>
    <title>Rapor.id</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;

            /* BACKGROUND POLTEK (HALUS) */
            background: linear-gradient(rgba(255,255,255,0.92), rgba(255,255,255,0.92)),
                        url('{{ asset('img/polibatam.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            padding: 14px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .navbar .menu a {
            margin-left: 25px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .login-btn {
            border: 1px solid #aaa;
            padding: 6px 18px;
            border-radius: 6px;
            background: #f3f3f3;
        }

        /* CARD UTAMA */
        .card {
            width: 65%;
            margin: 40px auto;
            background: #ffffffee;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .title {
            text-align: center;
            font-size: 30px;
            letter-spacing: 6px;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            color: #555;
            margin-bottom: 25px;
        }

        .main-img img {
            width: 100%;
            border-radius: 10px;
        }

        /* SECTION INFO */
        .info {
            display: flex;
            gap: 30px;
            margin-top: 30px;
            align-items: center;
        }

        .info img {
            width: 130px;
        }

        .info-text {
            font-size: 14px;
            color: #444;
            line-height: 1.6;
        }

        .info-text b {
            display: block;
            margin-bottom: 5px;
        }

        /* TENTANG */
        .tentang {
            text-align: center;
            margin-top: 40px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        .footer-text {
            text-align: center;
            font-size: 13px;
            color: #555;
            margin-top: 10px;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>Rapor.id</b></div>

    <div class="menu">
        <a href="/home">Beranda</a>
        <a href="/about">Tentang</a>
        <a href="/login" class="login-btn">LOGIN</a>
    </div>
</div>

<!-- CARD -->
<div class="card">

    <div class="title">RAPOR</div>

    <div class="subtitle">
        Sistem Informasi & Layanan Mahasiswa<br>
        Politeknik Negeri Batam
    </div>

    <!-- FOTO KELOMPOK -->
    <div class="main-img">
        <img src="{{ asset('img/foto-kelompok.jpeg') }}" alt="Foto Kelompok">
    </div>

    <!-- INFO -->
    <div class="info">

        <!-- ILUSTRASI -->
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png">

        <div class="info-text">
            <b>Apa fungsi dari rapor.id ini?</b>
            Rapor.id membantu guru dalam mengelola nilai siswa secara digital 
            dengan lebih mudah dan efisien.

            <br><br>

            <b>Pengguna:</b>
            Admin TU<br>
            Guru<br>
            Wali kelas

            <br><br>

            Kami memberikan sistem yang terintegrasi untuk mempermudah 
            pengolahan data rapor siswa secara cepat dan akurat.
        </div>

    </div>

    <!-- TENTANG -->
    <div class="tentang">TENTANG</div>

    <div class="footer-text">
        Sistem untuk membantu pengelolaan rapor siswa secara digital.
    </div>

</div>

</body>
</html>