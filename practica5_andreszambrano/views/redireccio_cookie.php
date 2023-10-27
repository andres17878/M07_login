<?php 

if (isset($_POST['idioma'])) {
    print
    setcookie('idiomas', $_POST['idioma']);

    if ($_COOKIE['idiomas'] == 'ca') {
        header('Location: ../views_ca/login.html');
    } else if ($_COOKIE['idiomas'] == 'en') {
        header('Location: ../views_en/login.html');
    } else if ($_COOKIE['idiomas'] == 'es') {
        header('Location: ../views_es/login.html');
    }
    
}

?>