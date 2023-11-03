<?php

    include('../dbConf.php');

    if(isset($_POST['send2'])){

        
        $email = $_POST['email'];
        $password = $_POST['pass'];

        
        $sql = "SELECT * FROM usuaris WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        session_start();
        if ($row['rol'] == 'Alumnat') {
            $_SESSION['rol'] = 'Alumnat';
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['logged'] = true;
        } else if ($row['rol'] == 'Professorat') {
            $_SESSION['rol'] = 'Professorat';
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['logged'] = true;
        } else {
            $_SESSION['logged'] = false;
        }
        
        include('../views/usuari.php');
    }
?>
