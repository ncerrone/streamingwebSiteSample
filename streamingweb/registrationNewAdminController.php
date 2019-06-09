<?php
  if(!isset($_POST["usernameAdmin"]) ||
    !isset($_POST["passwordAdmin"])){
        die;
    }else{
    $username = $_POST["usernameAdmin"];
    $password = $_POST["passwordAdmin"];

    $password = md5($password); // qui vado a cifrare la password

    $connection = mysqli_connect("localhost", "root", "", "streamingweb");
    $query = "INSERT INTO 'admintable' (username, password) VALUES ('$username', '$password')";
    $result = $connection->query($query);

    echo "Registrazione nuovo admin avvenuta con successo";

    $result->free();
	$connection->close();	
  }
 ?>
