<?php

setcookie("idiomas", "", time() - 1);
print_r($_COOKIE['idiomas']);
include("index.php");

?>