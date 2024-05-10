<?php
session_start();

require ('regist.php');
if (isset($_POST["signup"])) {
  if (registrasi($_POST) >  0 ) {
      echo "
          <script>
              alert('User Baru Berhasil Ditambahkan!')
          </script>
      ";
      header('index.php');
  } else {
      echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek Pratama - Registrasi</title>
  <link rel="stylesheet" href="loginregister-style.css">
</head>
<body>
  <div class="container">
    <h1>Selamat Datang di Apotek Pratama!</h1>

    <div class="register-box">
      <h2>Registrasi</h2>
      <form action="" method="post">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        <button name= 'signup'type="submit">Daftar</button>
      </form>
      <p>Sudah memiliki akun? <a href="index.php">Login Sekarang</a></p>
    </div>
  </div>
</body>
</html>



