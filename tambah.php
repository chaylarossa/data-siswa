<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="" method="POST">
        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" required><br>
        <label>Kelas:</label>
        <input type="text" name="kelas" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $tanggal = $_POST['tanggal_lahir'];
        $query = "INSERT INTO siswa (nama_siswa, kelas, jurusan, tanggal_lahir) VALUES ('$nama', '$kelas', '$jurusan', '$tanggal')";
        if ($conn->query($query)) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
