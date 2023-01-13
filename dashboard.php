<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['username'];

    if($varsesion == null || $varsesion = ''){
        echo 'Debes iniciar sesión para entrar aqui';
        die();
    }


?>
<!--       -->
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="styledash.css">
    <!-- CUSTOM JS -->
    <script src="dashactions.js" defer></script>
 </head>

 <style>
   
    

    .imagen{
    position: absolute;
    top: 0;
    margin-top:80px;
    margin-left: 200px;
    width: 1600px;
    height: 800px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    color: #ffffff;
}
 </style>
<body>
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="../Logouni.png" alt="">
                <span>Servicio Ganadero</span>
                <br>
            
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <label class="input">Bienvenido <?php echo $_SESSION['username']?></label>
            <label type="text" class="input">
        </div>
        <!-- MENU -->
        <div class="menu">
            <!--<div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Informes</span>
            </div> -->

            <div class="enlace">
                <a class="aref" href="perfil.php">
                    <i class="bx bx-user"></i>
                        <span>Perfil</span>
                </a>
            </div>

            <div class="enlace">
                <a class="aref" href="analiticas.php">
                    <i class="bx bx-grid-alt"></i>
                         <span>Analíticas</span>
                </a>     
            </div>

            <div class="enlace">
                <a class="aref" href="mensajes.php">
                    <i class="bx bx-message-square"></i>
                          <span>Mensajes</span>
                </a>
            </div>

            <div class="enlace">
                <a class="aref" href="cargarruv.php">
                    <i class="bx bx-file-blank"></i>
                          <span>Cargar RUV</span>
                </a>
            </div>

            <!--<div class="enlace">
                <i class="bx bx-cart"></i>
                <span>Pedidos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div>-->

            <div class="enlace">
                <a class="aref" href="../salir.php">
                  <i class="bx bx-cog"> </i>
                     <span>Cerrar Sesión</span>                  
                </a>
                
            </div>

            <div class="imagendiv">
                 <img class="imagen" src="fondoprincipal.jpg" alt="prueba de fondo">
        
            </div>
        </div>
    </div>

   
    
</body>
</html>
