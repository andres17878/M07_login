<?php

setcookie("idiomas", "", time() - 1, "/");
header("Location: index.php");
?>