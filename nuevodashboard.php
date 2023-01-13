<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['username'];

    if($varsesion == null || $varsesion = ''){
        echo 'Debes iniciar sesión para entrar aqui';
        die();
    }

    /*if(isset($_POST["upexcel"])){
       require_once('../conexionphpazure.php');
       require_once('cargarexcel.php');

       $archivos = $_FILES['excelanalitycs']['name'];
       $archivocopiado = $_FILES["excelanalitycs"]["tmp_name"];
       $archivo_guardado = "copia_".$archivos;

       echo $archivos."esta en ruta temporal: " .$archivocopiado;

       if(copy($archivocopiado , $archivo_guardado)){
        echo "copiado con exito";
       }else {
        echo "error en guardar";
       }
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
	<header>
        <nav class="nav">
            <div class="logo"> 
                <h1 class="label">Bienvenido </br> <?php echo $_SESSION['username']?></h1>
            </div>
            <ul class = "menu">
                    <li><a href="javascript:abrirperfil()">Perfil</a></li> 
                    <li><a href="javascript:veranalitycs()">Datos Estadisticos</a></li>
                    <li><a href="javascript:mostrarmensajes()">Dashboard</a></li>                      
                    <li><a href="javascript:cargarruv()">Cargar Ruv</a></li> 
                    <li><a href="javascript:pedircita()">Pedir Cita</a></li>	
                    <li><a href="./salir.php">Cerrar Sesión</a></li> 
                </ul> 
        </nav>
    </header>

	<div class="capa"></div>
<!--	--------------->
    <div class="ventana1" id="perfil">
        <div id="cerrarw">
            <a href="javascript:cerrar()"><img class ="cerrarw" src="cerrar-ventana.png"></a>
       </div>
        <h1>perfil</h1>
    </div>
    <div class="ventana1" id="mensajes">
        <div id="cerrarw">
            <a href="javascript:cerrar()"><img class ="cerrarw" src="cerrar-ventana.png"></a>
        </div>
            <div class="grafica">
                <BR></BR>
                <h1>DATOS PROYECTADOS 2023</h1>
                <BR></BR>
            <iframe title="total" width="1140" height="720" src="https://app.powerbi.com/reportEmbed?reportId=f3d331e7-79f7-47a3-a3a3-86482b3f79c6&autoAuth=true&ctid=64ebc78e-0a5f-44e1-a504-5713eff64b33" frameborder="0" allowFullScreen="true"></iframe>

            </div>        
    </div>        
    <div class="ventana1" id="analitycs">
        <div id="cerrarw">
            
            <a href="javascript:cerrar()"><img class ="cerrarw" src="cerrar-ventana.png"></a>       
        </div>
        <h1>Datos Nacionales</h1>
        <div class="tabla">
            <div class="wrapper">
                <table  id="mitabla"  class="tablainformacion" style="width:100%">
            <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Codigo</th>
                        <th>Terneras Menores 1 año</th>
                        <th>Terneros Menores 1 año</th>
                        <th>Hembras 1 - 2 años</th>
                        <th>Machos 1 - 2 años</th>
                        <th>Hembras 2 - 3 años</th>
                        <th>Machos 2 - 3 años</th>
                        <th>Hembras Mayores 3 años</th>
                        <th>Machos Mayores 3 años</th>
                        <th>Total Ganado</th>
                    </tr>
                    <?php
                            include 'conexionphpazure.php';
                            $sql="select * from excel order by dpto asc";
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
        </div>        
    </div>
    <div class="ventana1" id="ruv">
        <div id="cerrarw">
            <a href="javascript:cerrar()"><img class ="cerrarw" src="cerrar-ventana.png"></a>
        </div>
        <h1>ruv</h1>
    </div>
    <div class="ventana1" id="citas">
        <div id="cerrarw">
            <a href="javascript:cerrar()"><img class ="cerrarw" src="cerrar-ventana.png"></a>
        </div>
        <h1>citas</h1>
    </div>

    <!--<input type="checkbox" id="btn-menu">
    <div class="container-menu">
	    <div class="cont-menu">
 
            <nav>
                <a href="javascript:abrirperfil()">Perfil</a>
			    <a href="javascript:mostrarmensajes()">Mensajes</a>
			    <a href="javascript:veranalitycs()">Datos Estadisticos</a>
			    <a href="javascript:cargarruv()">Cargar Ruv</a>
                <a href="javascript:pedircita()">Pedir Cita</a>			
	    	</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div> -->

<script>
    function abrirperfil(){
        document.getElementById("perfil").style.display="block"
    }

    function mostrarmensajes(){
        document.getElementById("mensajes").style.display="block"
    }

    function veranalitycs(){
        document.getElementById("analitycs").style.display="block"
    }

    function cargarruv(){
        document.getElementById("ruv").style.display="block"
    }

    function pedircita(){
        document.getElementById("citas").style.display="block"
    }

    function cerrar(){
        document.getElementById("perfil").style.display="none";
        document.getElementById("mensajes").style.display="none";
        document.getElementById("analitycs").style.display="none";
        document.getElementById("ruv").style.display="none";
        document.getElementById("citas").style.display="none";
    }
</script>
</body>
</html>