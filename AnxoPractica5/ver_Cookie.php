<?php

if (!$_COOKIE['sel_idioma']){
    header('Location: index.php');
} else if ($_COOKIE['sel_idioma'] == 'es'){
    header('Location: LoginSpanish.html');
} else if ($_COOKIE['sel_idioma'] == 'cat'){
    header('Location: LoginCatalan.html');
}else if ($_COOKIE["sel_idioma"] == 'eng'){
    header('Location: LoginEnglish.html');
}

?>