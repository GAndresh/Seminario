<?php
require 'conedb.php';

$idusuario = $_POST['identificacionn'];
$nameuser = $_POST['nombre'];
$apeuser = $_POST['apellido'];
$edaduser = $_POST['edad'];
$mailuser = $_POST['email'];
$teluser = $_POST['telefono'];
$pssuser = $_POST['pass'];
$tipoiduser = $_POST['selecttipoid'];
$tiporol = $_POST['selectrol'];

$insertar = "insert into usuario (idUsuario, nombreUsuario, apellidoUsuario, edadUsuario, mailUsuario, telefonoUsuario, contrasenhaUsuario, fktipoid, fkrol)
 values ('$idusuario', '$nameuser', '$apeuser', '$edaduser', '$mailuser', '$teluser', '$pssuser', '$tipoiduser', '$tiporol')";

 $query = mysqli_query($conexion, $insertar);

 if($query){
    header("location:login.php");
 }else{
    echo "incorrecto";
 }


?>