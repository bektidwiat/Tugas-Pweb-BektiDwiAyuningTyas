<?php 
require_once 'config/database.php';
// require_once './app/controllers/drugController.php';


$id = $_GET["id"];
var_dump($id);

$query = 'DELETE FROM drug WHERE ID = $id';
$stmt = $conn->

if ($id){
    header("Location: http://localhost/tugasbikinapp/index.php");
} else {
    echo "Data Obat Gagal Dihapus";
}


?>