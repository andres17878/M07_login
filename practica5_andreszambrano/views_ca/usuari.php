<?php
    include('../dbConf.php');

    if($row['rol'] == 'Alumnat') {
        echo 'soc un alumne';
        echo '<br> nom: ' . $row['nombre'];
        echo '<br> cognom: ' . $row['apellido'];
        echo '<br> email: ' . $row['email'];
    } else if ($row['rol'] == 'Professorat'){
        echo 'Hola ' . $row['nombre'] . ', ets professor!!';
        echo '<br> La llista d\'usuaris de la base de dades és: ';
        $sql = "SELECT * FROM usuaris";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<br> NOM: ' . $row['nombre'] . ' COGNOM: ' . $row['apellido'];
        }

    } else {
        include('login.html');
        echo 'Login incorrecte';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuari</title>
</head>
<body>
    <br>
    <a href="../views/eliminarcookie.php">Eliminar cookie</a>
    <a href="../views/eliminarcookie.php">Selecció d'idioma</a>

    
</body>
</html>


    