<?php

include('config.php');

$servidor = "mysql:host=".SERVIDOR.";dbname=".BD;


try {

  $pdo = new PDO($servidor, USUARIO, PASSWORD);
  return $pdo;
  // echo "<script>alert('Conectado')</script>";

} catch (PDOException $e) {
  
  // echo "<script>alert('Error' .$e->getMessage())</script>";

}

?>