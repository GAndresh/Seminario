<?php
    require 'conexionphpazure.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 
 </head>
<body>
<div class="tabla">
            <table class="informacion">
                <thead>
                    <tr>
                        <td>Departamento</td>
                        <td>Municipio</td>
                        <td>Codigo</td>
                        <td>Terneras Menores 1 año</td>
                        <td>Terneros Menores 1 año</td>
                        <td>Hembras 1 - 2 años</td>
                        <td>Machos 1 - 2 años</td>
                        <td>Hembras 2 - 3 años</td>
                        <td>Machos 2 - 3 años</td>
                        <td>Hembras Mayores 3 años</td>
                        <td>Machos Mayores 3 años</td>
                        <td>Total Ganado</td>
                    </tr>
                    <?php
                            
                            $sql="select * from excel";
                            $result=mysqli_query($conexion, $sql);
                            while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['dpto']?></td>
                        <td><?php echo $mostrar['muni']?></td>
                        <td><?php echo $mostrar['codigo']?></td>
                        <td><?php echo $mostrar['terneras']?></td>
                        <td><?php echo $mostrar['terneros']?></td>
                        <td><?php echo $mostrar['hembras']?></td>
                        <td><?php echo $mostrar['machos']?></td>
                        <td><?php echo $mostrar['hmayores']?></td>
                        <td><?php echo $mostrar['mmayores']?></td>
                        <td><?php echo $mostrar['hembrasadultas']?></td>
                        <td><?php echo $mostrar['machosadultos']?></td>
                        <td><?php echo $mostrar['total']?></td>
                        
                     
                    </tr>
                    <?php } ?>
                </thead>
            </table>
        </div>
    
</body>
</html>
