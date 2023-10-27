<?php
    echo $_GET['idioma'];

    setcookie("sel_idioma", $_GET['idioma'], time()+86400);
    header('Location: ver_Cookie.php');

?>