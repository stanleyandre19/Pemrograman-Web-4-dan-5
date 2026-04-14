<!DOCTYPE html>
<html>
<head>
    <title>Home - Rapor.id</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }

        /* NAVBAR */
        .navbar {
            background-color: #ffffff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        .navbar a {
            text-decoration: none;
            margin: 0 10px;
            color: black;
        }

        .login-btn {
            background-color: #ddd;
            padding: 5px 15px;
            border-radius: 5px;
        }

        /* CONTENT */
        .container {
            text-align: center;
            padding: 30px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .subtitle {
            color: #555;
            margin-bottom: 20px;
        }

        .image-box img {
            width: 60%;
            border-radius: 10px;
        }

        /* INFO SECTION */
        .info {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background-color: white;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            text-align: left;
        }

        .card h3 {
            text-align: center;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>Rapor.id</b></div>
    <div>
        <a href="/home">Beranda</a>
        <a href="/about">Tentang</a>
        <a href="/login" class="login-btn">Login</a>
    </div>
</div>

<!-- MAIN -->
<div class="container">
    <div class="title">RAPOR</div>
    <div class="subtitle">
        Sistem Informasi & Layanan Mahasiswa<br>
        Politeknik Negeri Batam
    </div>

    <div class="image-box">
        <img src="https://via.placeholder.com/600x350" alt="gambar">
    </div>

    <div class="info">
        <div class="card">
            <h3>Apa fungsi sistem ini?</h3>
            <p>
                Sistem ini membantu guru dalam mengelola nilai siswa 
                secara digital dan terstruktur.
            </p>
        </div>

        <div class="card">
            <h3>Pengguna</h3>
            <p>
                - Admin TU<br>
                - Guru<br>
                - Wali Kelas
            </p>
        </div>
    </div>
</div>

</body>
</html>