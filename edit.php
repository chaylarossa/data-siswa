<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa WHERE id_siswa = $id";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
    ?>
    <form action="" method="POST">
        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" value="<?= $data['nama_siswa'] ?>" required><br>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required><br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" required><br>
        <button type="submit" name="submit">Update</button>
    </form>
    <a href="index.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $tanggal = $_POST['tanggal_lahir'];
        $query = "UPDATE siswa SET nama_siswa = '$nama', kelas = '$kelas', jurusan = '$jurusan', tanggal_lahir = '$tanggal' WHERE id_siswa = $id";
        if ($conn->query($query)) {
            echo "Data berhasil diupdate!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
