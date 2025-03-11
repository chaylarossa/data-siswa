<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">Tambah Data Siswa</a>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Cari nama siswa">
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <tr style="background-color: #e8a1cd;">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php
        $search = $_GET['search'] ?? '';
        $query = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$search%'";
        $result = $conn->query($query);
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>{$row['nama_siswa']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['jurusan']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>
                    <a href='edit.php?id={$row['id_siswa']}'>Edit</a>
                    <a href='hapus.php?id={$row['id_siswa']}' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
