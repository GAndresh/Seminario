<?php
require 'conexionphpazure.php';
    session_start();
    $_SESSION['usuario'] = "";
    $_SESSION['identificacion'] = "";

    header("location:nuevodashboard.php");



?>