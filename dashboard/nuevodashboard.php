<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['username'];

    if($varsesion == null || $varsesion = ''){
        echo 'Debes iniciar sesión para entrar aqui';
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="../fontello/fontello/css/fontello.css">
   
</head>

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
		<div class="logo">
           <!-- <label class="input">Bienvenido <?php echo $_SESSION['username']?></label>
            <label type="text" class="input">-->
            <h1>Menú Principal</h1>
		</div>

			<nav class="menu">
				<a href="../salir.php">Cerrar Sesión</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
    <div class="ventana1" id="perfil">
        <div id="cerrarw">
            <img class ="cerrarw" src="cerrar-ventana.png">
        </div>
        <h1>perfil</h1>
    </div>
    <div class="ventana1" id="mensajes">
        <h1>mensajes</h1>
    </div>        
    <div class="ventana1" id="analitycs">
        <h1>analitycs</h1>
    </div>
    <div class="ventana1" id="ruv">
        <h1>ruv</h1>
    </div>
    <div class="ventana1" id="citas">
        <h1>citas</h1>
    </div>

    <input type="checkbox" id="btn-menu">
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
</div>

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
</script>

</body>
</html>