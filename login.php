<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Login & Registro</title>
    <link rel="stylesheet" href="stylelogin.css">

</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="izquierdop">
                    <form action="login.php" autocomplete="off" 
                        class="loginformulario">
                        <div class="logo">
                            <img src="Logouni.png" alt="alertas">
                            <h4>Gestor de alertas</h4>
                        </div>

                        <div class="heading">
                            <h2>Bienvenido</h2>
                            <h6>¿Quieres Registrarte?</h6>
                            <a href="#" class="toggle">Registrate aqui</a> 
                        </div>
                         
                        <div class="formularioactual">
                            <div class="entrada-wrap">
                                <input type="text" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu Identificación</label>
                            </div>
                            <div class="entrada-wrap">
                                <input type="password" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu Contraseña</label>
                            </div>
                            <input type="submit" value="Sing In" class="btningreso"/>
                            <p class="text">
                                ¿Problemas para iniciar sesión?
                                <a href="#" >Click aqui</a>    
                            </p>                  
                        </div>
                    </form>
                    <form action="login.php" autocomplete="off" 
                        class="registroformulario">
                        <div class="logo">
                            <img src="Logouni.png" alt="alertas">
                            <h4>Gestor de alertas</h4>
                        </div>

                        <div class="heading">
                            <h2>Bienvenido</h2>
                            <h6>¿Tienes una cuenta?</h6>
                            <a href="#" class="toggle">Click Aqui</a> 
                        </div>                         
                        <div class="formularioactual">
                            <div class="entrada-wrap">
                                <input type="text" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu Nombre</label>
                            </div>
                            <div class="entrada-wrap">
                                <input type="text" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu Apellido</label>
                            </div>
                            <select class="entrada-wrap" name="select" id="tipoid">
                            <option value="value0">Tipo Identificación</option>
                            <option value="value1">Cedula Ciudadania</option>
                            <option value="value2">Pasaporte</option>
                            <option value="value3">Rut</option>
                            </select>
                            <div class="entrada-wrap">
                                <input type="number" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu Identificación</label>
                            </div>
                            <div class="entrada-wrap">
                                <input type="number" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu edad</label>
                            </div>
                            <div class="entrada-wrap">
                                <input type="number" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu numero telefonico</label>
                            </div>
                            <div class="entrada-wrap">
                                <input type="password" 
                                minlength="4" 
                                class="entradasform"
                                autocomplete="off" 
                                require/>
                                <label>Ingresa tu contraseña</label>
                            </div>
                            <select class="entrada-wrap" name="select" id="tiporol">
                            <option value="value0">Selecciona tu Rol</option>
                            <option value="value1">Veterinario</option>
                            <option value="value2">Propietario</option>
                            </select>                            
                            <input type="submit" value="Sing In" class="btningreso"/>
                            <p class="text">
                                ¿Problemas para iniciar sesión?
                                <a href="#" >Click aqui</a>    
                            </p>                  
                        </div>
                    </form>
                                                   
                </div>
                <div class="derechop">
                    <div class="imagenes">
                        <img src="uniamazonia.jpg" class="image img-1 show" alt="">
                        <img src="ganado.jpg" class="image img-2" alt="">
                        <img src="ica.jpg" class="image img-3" alt="">
                    </div>
                    <div class="textslider">
                        <div class="textwrap">
                            <div class="textgroup">
                                <h2>Por la inocuidad animal</h2>
                                <h2>Por la sanidad animal</h2>
                                <h2>Por nuestro departamento del Caquetá</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main> 

<script src="app.js"></script>
</body>
</html>