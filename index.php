<?php
session_start();
require 'config\database.php';
if(isset($_SESSION["login"])) {
    header("Location: dashbooard.php");
    exit;
  }
  
  
  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    $result = mysqli_query($conn,"SELECT * FROM akun WHERE username = '$username'");
  
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["namalengkap"] = $username;
            header("Location: dashbooard.php");
            exit;
        };
    }
  
    $error = true;
  }
  
  ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek Pratama - Login</title>
  <link rel="stylesheet" href="loginregister-style.css">
</head>
<body>
  <div class="container">
    <?php
      // Check for failed login attempt (if any)
      if (isset($_GET['loginFailed'])) {
        echo '<p style="color: red;">Username atau Password salah!</p>';
      }
    ?>
    <h1>Selamat Datang di Apotek Pratama!</h1>

    <div class="login-box">
      <h2>Login</h2>
      <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">
        <button name= 'login' type="submit">Login</button>
      </form>
      <p>Belum memiliki akun? <a href="register.php">Daftar Sekarang</a></p>
    </div>
  </div>
</body>
</html>


