<?php
require 'conexionphpazure.php';
session_start();

$id = $_POST['identificacion'];
$pass = $_POST['contrasena'];

$query = "select count(*) as contar, nombreUsuario as elname, apellidoUsuario as apellido, idUsuario as ide 
            from usuario where idUsuario = '$id' and contrasenhaUsuario = '$pass'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);


if($array['contar']>0){
    //$ideis = $array['ide'];    
       
    //$_SESSION['user_id'] = $ideis; 
    
    $nameis = $array['elname'];          
    $_SESSION['username'] = $nameis; 
    $apeis = $array['apellido'];
    $_SESSION['apellido'] = $apeis;
    $cedula = $array['ide'];
    $_SESSION['ide'] = $cedula;
    $fotop = $array['foto'];
    $_SESSION['foto'] = $fotop;
    
   
    header("location:./nuevodashboard.php");
}else{
    echo "datos no encontrados";
}


?>