<?php
require './SSL/conexionphpazure.php';
session_start();

$id = $_POST['identificacion'];
$pass = $_POST['contrasena'];
$nameis = $_POST[""];

$query = "select count(*) as contar, nombreUsuario as elname from usuario where idUsuario = '$id' and contrasenhaUsuario = '$pass'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $nameis = $array['elname'];    
    $_SESSION['username'] = $nameis;    
    header("location:./dashboard/dashboard.php");
}else{
    echo "datos no encontrados";
}


?>