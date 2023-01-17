<?php
require 'conexionphpazure.php';
$idPredio = $_POST['idPredio'];
$nombrePredio = $_POST['nombrePredio'];
$nombreVereda = $_POST['NombreVereda'];
$marcaPredio = $_POST['marcaPredio'];
$terneras = $_POST['terneras1'];
$terneros = $_POST['terneros1'];
$hembras = $_POST['hembras1'];
$machos	= $_POST['machos1'];
$hmayores = $_POST['hembras2'];
$mmayores = $_POST['machos2'];
$hembrasadultas	= $_POST['hembras3'];
$machosadultos	= $_POST['machos3'];
$anho = $_POST['anho1'];
$fkusuariopredio = $_POST['ide'];
$fkmunicipiopredio= $_POST['municipiois'];
$image = addslashes(file_get_contents($_FILES['findfoto']['tmp_name']));


$queryimg = "insert into Predio (idPredio, nombrePredio, nombreVereda, marcaPredio, terneras, terneros, 
   hembras, machos, hmayores, mmayores, hembrasadultas, machosadultos, anho, fkusuariopredio, fkmunicipiopredio, fotopredio) values 
   ('$idPredio', '$nombrePredio', '$nombreVereda', '$marcaPredio', '$terneras', '$terneros', '$hembras', '$machos', '$hmayores', '$mmayores',
   '$hembrasadultas', '$machosadultos', '$anho', '$fkusuariopredio', '$fkmunicipiopredio', '$image')";

    $query1 = mysqli_query($conexion, $queryimg);
        if($query1){
            header("location:nuevodashboard.php");
        }else{
            echo "incorrecto";
        }
          //  header("location:./nuevodashboard.php");
          
            /*
            if(isset($_FILES["findfoto"])){
                $file = $_FILES["findfoto"];
                //$nombre = $_FILES["name"];
                $tipo = $file["type"];
                $temporalruta = $file["tmp_name"];
                $size = $file["size"];
                $dimensions = getimagesize($temporalruta);
                $ancho = $dimensions[0];
                $alto = $dimensions[1];
                $folder = "csv/";
                /*if($tipo != 'image/jpg' && $tipo != 'image/JPG' && 
                    $tipo != 'image/jpeg' && $tipo != 'image/png' && 
                    $tipo != 'iamge/gif'){
                        echo "Error, el archivo no es una imagen";
                    }else if($size > 40*1024*1024){
                        echo "Error, la imagen es demasiado. 3MB es permitido";
                    }else{*/
                        //$src = $folder.$nombre;
                    //   $src = $folder;
                    //   move_uploaded_file($temporalruta, $src);
                    //  $image="csv/";
                    // $image="csv/".$nombre;
            //     }
            //}

?>

