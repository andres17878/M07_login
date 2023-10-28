<?php

if (!$_COOKIE['sel_idioma']){
    header('Location: index.php');
} else if ($_COOKIE['sel_idioma'] == 'es'){
    header('Location: ../vistes_es/LoginSpanish.html');
} else if ($_COOKIE['sel_idioma'] == 'cat'){
    header('Location: ../vistes_cat/LoginCatalan.html');
}else if ($_COOKIE["sel_idioma"] == 'eng'){
    header('Location: ../vistes_eng/LoginEnglish.html');
}

?>