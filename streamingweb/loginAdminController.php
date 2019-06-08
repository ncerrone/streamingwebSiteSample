<?php
  if(!isset($_POST["username"]) || !isset($_POST["password"])){
    die("Login errato per mancanza di dati ... ");
  }else{
    $username = $_POST["username"];
    $password = $_POST["password"];
  }
 ?>
