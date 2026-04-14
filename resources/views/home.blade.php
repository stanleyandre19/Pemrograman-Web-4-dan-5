<!DOCTYPE html>
<html>
<head>
    <title>Rapor.id</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaeaea;
            margin: 0;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            padding: 12px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        .nav-left {
            font-weight: bold;
        }

        .nav-right a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
        }

        .login-btn {
            border: 1px solid #aaa;
            padding: 5px 15px;
            border-radius: 5px;
            background: #f0f0f0;
        }

        /* MAIN */
        .container {
            text-align: center;
            padding: 40px;
        }

        .title {
            font-size: 26px;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .subtitle {
            margin-top: 10px;
            color: #555;
        }

        .main-img {
            margin-top: 20px;
        }

        .main-img img {
            width: 500px;
            border-radius: 10px;
        }

        /* SECTION */
        .section {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .box {
            background: white;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            text-align: left;
        }

        .box h3 {
            text-align: center;
        }

        .tentang {
            margin-top: 40px;
            font-weight: bold;
            letter-spacing: 2px;
        }

    </style>
</head>
<body>

<div class="navbar">
    <div class="nav-left">Rapor.id</div>
    <div class="nav-right">
        <a href="/home">Beranda</a>
        <a href="/about">Tentang</a>
        <a href="/login" class="login-btn">LOGIN</a>
    </div>
</div>

<div class="container">
    <div class="title">RAPOR</div>

    <div class="subtitle">
        Sistem Informasi & Layanan Mahasiswa<br>
        Politeknik Negeri Batam
    </div>

    <div class="main-img">
        <img src="https://via.placeholder.com/500x300">
    </div>

    <div class="section">
        <div class="box">
            <h3>Apa fungsi dari sistem ini?</h3>
            <p>
                Rapor.id memudahkan guru dalam mengelola rapor siswa 
                secara digital dan efisien.
            </p>
        </div>

        <div class="box">
            <h3>Pengguna</h3>
            <p>
                Admin TU<br>
                Guru<br>
                Wali kelas
            </p>
        </div>
    </div>

    <div class="tentang">TENTANG</div>
</div>

</body>
</html>