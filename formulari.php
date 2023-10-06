<?php

    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $contrasenya = $_POST['password'];
    $correu = $_POST['mail'];
    $actiu = $_POST['active'];

    $insert = "INSERT INTO user (id, rol, name, surname, password, email, active) VALUES ($id, $rol, $nom, $cognom, $contrasenya, $correu, $actiu)";

    $conexxio = mysqli_connect('localhost:4306', 'root', '', 'user');

    
    mysqli_query($conexxio, $insert);
    

    mysqli_close($conexxio);

?>

