<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact - Pengolahan Rapor Siswa</title>
    <style>
        body { font-family: Arial; text-align: center; }
        .container { width: 60%; margin: auto; }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

    <h1>Kontak Kami</h1>
    <p>Sistem Pengolahan Rapor Siswa</p>

    <div class="container">
        <form>
            <input type="text" placeholder="Nama Anda">
            <input type="email" placeholder="Email">
            <textarea placeholder="Pesan"></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>

</body>
</html>