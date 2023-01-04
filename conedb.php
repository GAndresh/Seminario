<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "seminario";

$conexion = mysqli_connect($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("Error en la coneccion" . $conexion->connect_errno);
    
}


?>