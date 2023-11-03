<?php
    include('../dbConf.php');

    session_start();

    if($_SESSION['logged'] == false) {
        include('login.html');
        echo 'Login incorrecte';
    }

    if($_SESSION['rol'] == 'Alumnat') {
        echo 'Benvingut alumne ' . $_SESSION['nombre'] . '!!';
        echo '<br> nom: ' . $_SESSION['nombre'];
        echo '<br> cognom: ' . $_SESSION['apellido'];
        echo '<br> email: ' . $_SESSION['email'];
    } else if ($_SESSION['rol'] == 'Professorat'){
        echo 'Benvingut professor ' . $_SESSION['nombre'] . '!!<br>';
        echo 'Hola ' . $_SESSION['nombre'] . ',ets professor!!';
        echo '<br> La llista d\'usuaris de la base de dades és: ';
        $sql = "SELECT * FROM usuaris";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<br> nom: ' . $row['nombre'] . ' cognom: ' . $row['apellido'];
        }

    }
    
    echo '<br><br><a href="../eliminar_sessio/eliminar_sessio.php">Tancar sessió</a>';
?>


    
