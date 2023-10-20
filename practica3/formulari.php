<?php

    include('/practica3/dbConf.php');

    if (isset($_POST['send'])){
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $nom = $_POST['name'];
        $cognom = $_POST['surname'];
        $contrasenya = $_POST['password'];
        $correu = $_POST['mail'];
        $actiu = $_POST['active'];
    }

    if ($actiu = 'si'){
        $actiu = 1;
    } else {
        $actiu = 0;
    }


    $insert = "INSERT INTO user (id, rol, name, surname, password, email, active) 
    VALUES ('$id', '$rol', '$nom', '$cognom', '$contrasenya', '$correu', '$actiu')";

    $connect->query($insert);

    
    header("Location: /practica3/formulari.html");

    

?>

