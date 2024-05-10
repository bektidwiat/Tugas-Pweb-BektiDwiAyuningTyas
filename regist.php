<?php
require_once 'config\database.php';

function registrasi($data) {
    global $conn;
    $nama = strtolower(stripslashes($data["nama"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn,"SELECT username FROM akun WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username sudah terdaftar!')</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    
    mysqli_query($conn,"INSERT INTO akun VALUES( '$nama','$username','$password',0)");

    return mysqli_affected_rows($conn);
}
?>