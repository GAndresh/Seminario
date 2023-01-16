<?php
require 'conexionphpazure.php';
session_start();

$id = $_POST['identificacion'];
$pass = $_POST['contrasena'];

$query = "select count(*) as contar, nombreUsuario as elname, idUsuario as ide from usuario where idUsuario = '$id' and contrasenhaUsuario = '$pass'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);


if($array['contar']>0){
    //$ideis = $array['ide'];    
       
    //$_SESSION['user_id'] = $ideis; 
    
    $nameis = $array['elname'];          
    $_SESSION['username'] = $nameis; 
    $cedula = $array['ide'];
    $_SESSION['ide'] = $cedula;
    
   
    header("location:./nuevodashboard.php");
}else{
    echo "datos no encontrados";
}


?>