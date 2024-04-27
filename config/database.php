<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tugaspweb';

try {
  $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {

  die('database error');
}