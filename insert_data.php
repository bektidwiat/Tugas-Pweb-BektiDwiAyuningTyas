<?php
include 'config/database.php';

$nama_obat = $_POST['nama_obat'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = "INSERT INTO drug (Nama, Jumlah, Harga) VALUES ('$nama_obat', $jumlah, $harga)";

if (mysqli_query($conn, $sql)) {
    echo "Data obat berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data obat: " . mysqli_error($conn);
}

mysqli_close($conn);
Header('Location: http://localhost/tugasbikinapp')
?>
