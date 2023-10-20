<?php

    $db_host = "localhost:4306";
    $db_nombre = "user";
    $db_usuario = "root";
    $db_passwd = "";

    $conn = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre );

    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
      }

?>