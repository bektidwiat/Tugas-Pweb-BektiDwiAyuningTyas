<?php

include 'config/database.php';
// Menangani unggahan foto
if (isset($_FILES["Foto"])) {
    $namaFile = $_FILES["Foto"]["name"];
    $tipeFile = $_FILES["Foto"]["type"];
    $ukuranFile = $_FILES["Foto"]["size"];
    $tmpFile = $_FILES["Foto"]["tmp_name"];
    $error = $_FILES["Foto"]["error"];

    // Validasi file
    if ($error === UPLOAD_ERR_OK) {
        // Cek tipe file yang diizinkan
        $allowedTypes = ["image/jpeg", "image/png", "image/jpg"];
        if (!in_array($tipeFile, $allowedTypes)) {
            echo "Tipe file tidak diizinkan.";
            exit();
        }

        // Cek ukuran file maksimum
        $maxFileSize = 1 * 1024 * 1024; // 1MB
        if ($ukuranFile > $maxFileSize) {
            echo "Ukuran file melebihi batas maksimum.";
            exit();
        }

        // Memindahkan file ke folder penyimpanan
        $targetDir = "foto/"; // Folder penyimpanan foto
        $fileName = basename($namaFile);
        $targetFile = $targetDir . $fileName;

        if (!move_uploaded_file($tmpFile, $targetFile)) {
            echo "Gagal mengunggah file.";
            exit();
        }

        // Menyimpan informasi foto ke database
        $sql = "INSERT INTO `Foto` (nama_file, tipe_file, ukuran_file) VALUES ('$fileName', '$tipeFile', $ukuranFile)";
        if (mysqli_query($conn, $sql)) {
            echo "Foto berhasil diunggah dan disimpan ke database.";
        } else {
            echo "Gagal menyimpan informasi foto ke database: " . mysqli_error($conn);
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file: " . $error;
    }
} else {
    echo "Pilih file foto untuk diunggah.";
}

mysqli_close($conn);
Header ('Location : http://localhost/tugasbikinapp')
?>
