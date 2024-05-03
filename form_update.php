<?php
  require 'drugModel.php';
  $data = DrugModel::detail($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Obat</title>
    <link rel="stylesheet" href="form_update.css">
</head>
<body>
    <h1>Update Data Obat</h1>

    <form action="update_data.php?id=<?= $_GET['id'] ?>" method="POST">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" id="nama_obat" name="nama_obat" id="nama_obat" value="<?= $data->Nama?>" required>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" id="jumlah" value="<?= $data->Jumlah?>"required>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" id="harga" value="<?= $data->Harga?>"required>
        <input type="submit" value="Ubah">
    </form>
</body>
</html>
