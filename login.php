<?php
require 'config/database.php';

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = md5($_POST['password']); // Hash password for security (consider using bcrypt or argon2 in production)

  $query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header('Location: dashboard.php'); // Redirect to dashboard on successful login
  } else {
    header('Location: index.php?loginFailed=true'); // Redirect to login with error message
  }
}
?>
