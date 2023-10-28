<?php 

    setcookie('idiomas', $_GET['idioma'], time() + 3600, '/');
    header("Location: index.php");

?>