<?php
require 'conexionphpazure.php';
$image ='';
if(isset($_FILES["findfoto"])){
    $file = $_FILES["findfoto"];
    $nombre = $_FILES["name"];
    $tipo = $file["type"];
    $temporalruta = $file["tmp_name"];
    $size = $file["size"];
    $dimensions = getimagesize($temporalruta);
    $ancho = $dimensions[0];
    $alto = $dimensions[1];
    $folder = "csv/";
    if($tipo != 'image/jpg' && $tipo != 'image/JPG' && 
        $tipo != 'image/jpeg' && $tipo != 'image/png' && 
        $tipo != 'iamge/gif'){
            echo "Error, el archivo no es una imagen";
        }else if($size > 40*1024*1024){
            echo "Error, la imagen es demasiado. 3MB es permitido";
        }else{
            $src = $folder.$nombre;
            move_uploaded_file($temporalruta, $src);
            $image="csv/".$nombre;
        }
}
    $queryimg = mysqli_query($conexion, "insert into Predio (fotopredio) values ('$image'");
    header("location:./nuevodashboard.php");

?>