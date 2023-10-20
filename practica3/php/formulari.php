<?php
    include('../dbConf.php');

    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $nom = $_POST['name'];
        $cognom = $_POST['surname'];
        $contrasenya = $_POST['password'];
        $correu = $_POST['mail'];
        $actiu = $_POST['active'];
    
    if ($actiu = 1){
        $actiu = true;
    } else {
        $actiu = false;
    }

    $insert = "INSERT INTO user (id, rol, name, surname, password, email, active) 
    VALUES ('$id', '$rol', '$nom', '$cognom', '$contrasenya', '$correu', '$actiu')";


if ($connect->query($insert) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert . "<br>" . $connect->error;
  }
}

    $connect->close();
    header("Location: ../html/formulari.html");
?>