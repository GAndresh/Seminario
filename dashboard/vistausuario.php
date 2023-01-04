<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: index.php");
}else{
    echo "<h1> Hola $usuario </h1>";

    echo "<a href=../salir.php> Cerrar Sesión</a>";
}


?>