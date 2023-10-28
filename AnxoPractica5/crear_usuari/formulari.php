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
    
    $correcte = $conn->query($consulta);

    if($correcte){
        if($_COOKIE['idioma'] == 'ca'){
            include('../vistes_cat/formulari.html');
            echo 'Usuari creat correctament';
        }else if($_COOKIE['idioma'] == 'en'){
            include('../vistes_eng/formulari.html');
            echo 'User created correctly';
        }else if($_COOKIE['idioma'] == 'es'){
            include('../vistes_es/formulari.html');
            echo 'Usuario creado correctamente';
        }
    } else{
        if($_COOKIE['idioma'] == 'ca'){
            include('../vistes_cat/formulari.html');
            echo 'Error al crear usuari';
        }else if($_COOKIE['idioma'] == 'en'){
            include('../vistes_eng/formulari.html');
            echo 'Error creating user';
        }else if($_COOKIE['idioma'] == 'es'){
            include('../vistes_es/formulari.html');
            echo 'Error al crear usuario';
        }
    }
    
    header("Location: ../vistes_cat/formulari.html");
    
}
?>