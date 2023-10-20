<?php

include('../dbConf.php');

if (isset($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $cognom = $_POST['apellido'];
    $rol_user = $_POST['rol'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $actiu = $_POST['active'];

    if ($actiu = 'si'){
        $actiu = 1;
    }else{
        $actiu = 0;
    }


    //Fem consulta query
    $consulta = "INSERT INTO usuaris(id, rol, nombre, apellido, password, email, active) 
                VALUES ('$id', '$rol_user', '$nom', '$cognom', '$pass', '$email', $actiu)";

    
    //Introduim les dades de consulta a la taula user
    
    $correcto = $conn->query($consulta);

    if($correcto){
        include('../views/index.html');
        echo 'Usuari creat correctament';
    }else{
        echo 'Error al crear usuari';
    }
    
    header("Location: ../views/index.html");
    
}
?>