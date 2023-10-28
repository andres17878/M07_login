<?php

    include('../dbConf.php');

    if(isset($_POST['send2'])){

        
        $email = $_POST['email'];
        $password = $_POST['pass'];

        
        $sql = "SELECT * FROM usuaris WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($_COOKIE['idiomas'] == 'ca'){
            include('../views_ca/usuari.php');
        }else if($_COOKIE['idiomas'] == 'en'){
            include('../views_en/usuari.php');
        }else if($_COOKIE['idiomas'] == 'es'){
            include('../views_es/usuari.php');
        }
    }
?>