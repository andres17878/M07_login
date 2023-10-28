<?php

    $db_host = "localhost:4306";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_passwd = "";
    try {
      $conn = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);
  
      if ($conn->connect_error) {
          throw new Exception("Connection failed: " . $conn->connect_error);
      }
    } catch (Exception $e) {
      die('Caught exception: '.  $e->getMessage() ."\n");
  }
  
?>