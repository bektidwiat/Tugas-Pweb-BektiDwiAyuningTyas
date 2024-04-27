<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Obat</title>
    <link rel="stylesheet" href="formtambah.css">
</head>
<body>
    <h1>Tambah Data Obat</h1>

    <form action="insert_data.php" method="post">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" id="nama_obat" name="nama_obat" required>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
