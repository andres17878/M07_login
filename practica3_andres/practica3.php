<?php 

$db_host = "localhost: 4306";
$db_user = "root";
$db_pass = "";
$db_name = "Users";

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$id = $_POST['id'];
$rol = $_POST['rol'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$email = $_POST['email'];
$active = $_POST['active'];


$insert = "INSERT INTO usuaris (id, rol, nombre, apellido, password, email, active) VALUES($id, $rol, $nombre, $apellido, $password, $email, $active)";

mysqli_query($conexion, $insert);

mysqli_close($conexion);


?>