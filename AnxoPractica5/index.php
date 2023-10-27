<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_COOKIE['sel_idioma'] == 'es') {
        header('Location: LoginSpanish.html');
    }else if ($_COOKIE['sel_idioma'] == 'cat') {
        header('Location: LoginCatalan.html');
    }else if ($_COOKIE['sel_idioma'] == 'eng') {
        header('Location: LoginEnglish.html');
    }
    ?>

    <table widht="25%" border="0" align="center">
        <tr>
            <td>Escull idioma</td>
        </tr>
        <tr>
            <td align="center"><a href="crearCookie.php?idioma=es">
            <img src="spain.png" width="90" height="60"></a><h1>SPAIN</h1></td>
            <td align="center"><a href="crearCookie.php?idioma=cat">
            <img src="catalan.jpeg" width="90" height="60"></a><h1>CATALONIA</h1></td>
            <td align="center"><a href="crearCookie.php?idioma=eng">
            <img src="english.jpeg" width="90" height="60"></a><h1>ENGLAND</h1></td>
        </tr>
    </table>

</body>
</html>