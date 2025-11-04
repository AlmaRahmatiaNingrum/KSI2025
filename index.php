<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Akademik</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(120deg, #2a2a72, #009ffd);
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: rgba(255, 255, 255, 0.9);
            color: #2a2a72;
            text-align: center;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 80px;
        }
        .card {
            background-color: white;
            width: 280px;
            text-align: center;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .card h2 {
            color: #2a2a72;
        }
        .card p {
            color: #555;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 18px;
            background-color: #2a2a72;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #1e1e56;
        }
        footer {
            text-align: center;
            color: white;
            margin-top: 100px;
            padding: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        Sistem Informasi Akademik
    </header>

    <div class="container">
        <div class="card">
            <h2>Koneksi Database</h2>
            <p>Melihat dan mengatur koneksi antara aplikasi dan database akademik.</p>
            <a href="koneksi.php" class="btn">Buka Koneksi</a>
        </div>

        <div class="card">
            <h2>Tambah Data</h2>
            <p>Menambahkan data mahasiswa baru ke dalam database akademik.</p>
            <a href="tambah_data.php" class="btn">Tambah Sekarang</a>
        </div>

    </div>

    <footer>
        © 2025 Sistem Akademik | Dibuat oleh Mahasiswa TI Polinela
    </footer>

</body>
</html>

