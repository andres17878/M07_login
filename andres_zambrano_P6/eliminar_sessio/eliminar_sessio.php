<?php
    session_start();
    session_unset();
    session_destroy();
    include('../views/index.html');
?>