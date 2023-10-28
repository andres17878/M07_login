<?php
    include('../dbConf.php');

    if($row['rol'] == 'Alumnat') {
        echo 'soc un alumne';
        echo '<br> nom: ' . $row['nombre'];
        echo '<br> cognom: ' . $row['apellido'];
        echo '<br> email: ' . $row['email'];
    } else if ($row['rol'] == 'Professorat'){
        echo 'Hola ' . $row['nombre'] . ',ets professor!!';
        echo '<br> La llista d\'usuaris de la base de dades és: ';
        $sql = "SELECT * FROM usuaris";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<br> nom: ' . $row['nombre'] . ' cognom: ' . $row['apellido'];
        }

    } else {
        include('LoginEnglish.html');
        echo 'Login incorrecte';
    }

?>


    