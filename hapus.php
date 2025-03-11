<?php
include 'db.php';
$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id_siswa = $id";
if ($conn->query($query)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Error: " . $conn->error;
}
?>
