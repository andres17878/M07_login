<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    <h1>Idioma</h1>

    <?php
        if(isset($_COOKIE['idiomas'])){
                   
            if($_COOKIE['idiomas'] == 'ca'){
                header("Location: ../views_ca/login.html");
            }else if($_COOKIE['idiomas'] == 'en'){
                header("Location: ../views_en/login.html");
            }else if($_COOKIE['idiomas'] == 'es'){
                header("Location: ../views_es/login.html");
            }
        }
    ?>
    <div>

        <div style="display: flex">
            <div><a href="redireccio_cookie.php?idioma=ca"><img src="catalan.svg" alt="Català" width="150px" height="90px"></div>
            <div><a href="redireccio_cookie.php?idioma=en"><img src="english.svg" alt="English" width="150px" height="90px"></div>
            <div><a href="redireccio_cookie.php?idioma=es"><img src="spanish.svg" alt="Español" width="150px" height="90px"></div>
        </div>
    </div>
    
</body>
</html>