<?php
    include('../dbConf.php');

    if($row['rol'] == 'Alumnat') {
        echo 'I am a student';
        echo '<br> NAME: ' . $row['nombre'];
        echo '<br> SURNAME: ' . $row['apellido'];
        echo '<br> EMAIL: ' . $row['email'];
    } else if ($row['rol'] == 'Professorat'){
        echo 'Hi ' . $row['nombre'] . ', you are a teacher!!';
        echo '<br> The user list on the database is: ';
        $sql = "SELECT * FROM usuaris";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<br> NAME: ' . $row['nombre'] . ' SURNAME: ' . $row['apellido'];
        }

    } else {
        include('login.html');
        echo 'Error';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <br>
    <a href="../views/eliminarcookie.php">Delete cookie</a>
    <a href="../views/eliminarcookie.php">Language selection</a>

    
</body>
</html>

    