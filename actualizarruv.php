<?php
require 'conexionphpazure.php';
$ruv = $_POST['ruv'];
$id = $_POST['ide'];

        $insertar5 = "update Predio set ruv = '$ruv' where fkusuariopredio = '$id';";

        $query5 = mysqli_query($conexion, $insertar5);

        if($query5){
            header("location:nuevodashboard.php");
        }else{
            echo "incorrecto";
            
        }


        ?>