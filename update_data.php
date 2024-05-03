<?php
include 'config/database.php';

$ID = $_GET['id'];
$nama_obat = $_POST['nama_obat'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// Perbaikan query SQL
$sql = "UPDATE drug SET Nama='".$nama_obat."', Jumlah='".$jumlah."', Harga='".$harga."' WHERE ID=".$ID;

if (mysqli_query($conn, $sql)) {
    echo "Data obat berhasil diupdate.";
} else {
    echo "Gagal mengupdate data obat: " . mysqli_error($conn);
}

mysqli_close($conn);

// Perbaikan header redirect
header('Location: http://localhost/tugasbikinapp');
exit; // Pastikan untuk keluar setelah header redirect
?>
