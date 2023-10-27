<?php

// Guardem 4 dades necessaries per fer la connexió amb la BBDD del servidor
    $db_host = "localhost:4306";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_passwd = "";
    try {
      $conn = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);
  
      // Check connection
      if ($conn->connect_error) {
          throw new Exception("Connection failed: " . $conn->connect_error);
      }
    } catch (Exception $e) {
      die('Caught exception: '.  $e->getMessage() ."\n");
  }
  
?>
