<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $query = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
    if (mysqli_query($koneksi, $query)) {
        echo "<p>Data berhasil ditambahkan!</p>";
    } else {
        echo "<p>Gagal menambahkan data: " . mysqli_error($koneksi) . "</p>";
    }
}
?>

<form method="POST" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>
    <label>NIM:</label><br>
    <input type="text" name="nim" required><br><br>
    <button type="submit">Tambah Data</button>
</form>
