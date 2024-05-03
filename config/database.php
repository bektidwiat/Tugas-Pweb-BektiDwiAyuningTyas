<?php 

include 'env.php';
$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

try {
  $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {

  die('database error');
}
?>