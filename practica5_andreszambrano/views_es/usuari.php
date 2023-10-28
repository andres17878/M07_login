<?php
    include('../dbConf.php');

    if($row['rol'] == 'Alumnat') {
        echo 'soy un alumno';
        echo '<br> nombre: ' . $row['nombre'];
        echo '<br> apellido: ' . $row['apellido'];
        echo '<br> email: ' . $row['email'];
    } else if ($row['rol'] == 'Professorat'){
        echo 'Hola ' . $row['nombre'] . ', eres profesor!!';
        echo '<br> La lista de usuarios de la base de datos es: ';
        $sql = "SELECT * FROM usuaris";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<br> NOMBRE: ' . $row['nombre'] . ' APELLIDO: ' . $row['apellido'];
        }

    } else {
        include('login.html');
        echo 'Login incorrecto';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <br>
    <a href="../views/eliminarcookie.php">Eliminar cookie</a>
    <a href="../views/eliminarcookie.php">Selección de idioma</a>

    
</body>
</html>


    