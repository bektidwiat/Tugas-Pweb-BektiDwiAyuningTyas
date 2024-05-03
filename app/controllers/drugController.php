<?php
require "../../drugModel.php";

if(isset($_GET['action']) and $_GET['action'] == 'create') {
  drugController::create();
}
else if(isset($_GET['action']) and $_GET['action'] == 'update') {
  drugController::update();
}
else if(isset($_GET['action']) and $_GET['action'] == 'delete') {
  drugController::delete();
} 
else if(isset($_GET['action']) and $_GET['action'] == 'Foto') {
  drugController::Foto();
}

class drugController{

  static function index(){
    $data = drugModel::read();
    return $data;
  }

  public static function create(){
    global $url;
    $data = drugModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public static function detail(){
    $data = drugModel::detail($_GET["id"]);
    return $data;
  }

  public static function update(){
    global $url;
    $data = drugModel::update($_POST["id"],$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public static function delete(){
    global $url;
    $data = drugModel::delete($_GET["id"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public static function Foto(){
    global $url;
    $data = drugModel::Foto($_GET["id"]);
    header("Location:".$url."/views/user/portofolio.php")
  }
}