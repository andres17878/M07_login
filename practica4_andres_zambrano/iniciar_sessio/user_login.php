<?php

include('../dbConf.php');

if (isset($_POST['send'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$consulta = "SELECT * FROM usuaris WHERE "




















?>