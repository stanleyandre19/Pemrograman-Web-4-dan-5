<!DOCTYPE html>
<html>
<head>
    <title>Rapor.id</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;

            /* Background Poltek */
            background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)),
                        url('{{ asset('img/polibatam.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            padding: 15px 60px;
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

        .login-btn:hover {
            background: #ddd;
        }

        /* CARD */
        .card {
            width: 65%;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .title {
            text-align: center;
            font-size: 30px;
            letter-spacing: 6px;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        .main-img img {
            width: 100%;
            border-radius: 10px;
        }

        /* INFO */
        .info {
            display: flex;
            gap: 30px;
            margin-top: 35px;
            align-items: center;
        }

        .info img {
            width: 120px;
        }

        .info-text {
            font-size: 14px;
            color: #444;
            line-height: 1.7;
        }

        .info-text b {
            display: block;
            margin-bottom: 5px;
        }

        /* TENTANG */
        .tentang {
            text-align: center;
            margin-top: 45px;
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

<!-- CARD UTAMA -->
<div class="card">

    <div class="title">RAPOR</div>

    <div class="subtitle">
        Sistem Informasi & Layanan Rapor Siswa<br>
    </div>

    <!-- FOTO KELOMPOK -->
    <div class="main-img">
        <img src="{{ asset('img/Gambar Poltek.jpg') }}" alt="Foto Kelompok">
    </div>

    <!-- INFO -->
    <div class="info">

        <!-- ILUSTRASI -->
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png">

        <div class="info-text">
            <b>Apa fungsi dari rapor.id?</b>
            Sistem ini membantu guru dalam mengelola nilai siswa 
            secara digital dengan lebih mudah dan efisien.

            <br><br>

            <b>Pengguna:</b>
            Admin TU<br>
            Guru<br>
            Wali kelas

            <br><br>

            Sistem ini dirancang untuk meningkatkan efisiensi 
            dalam pengolahan data rapor siswa.
        </div>

    </div>

    <div class="tentang">TENTANG</div>

    <div class="footer-text">
        Sistem pengelolaan rapor siswa berbasis web.
    </div>

</div>

</body>
</html>