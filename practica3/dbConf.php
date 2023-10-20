<?php
    $db_host = "localhost:4306";
    $db_nombre = "user";
    $db_usuario = "root";
    $db_passwd = "";

    $connect = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre );

    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    } else {
      echo "Connected successfully";
    }
?>