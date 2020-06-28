<!doctype html>
<html lang="en">
	<?php
// Conexión a la base de datos
	require_once 'BD.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
    }
    ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="./js/register.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registrarse</title>
    <link rel="icon" href="./img/Logo.ico" type="image/x-icon"/>
    <link rel = "stylesheet" type = "text/css" href = "./css/header.css"/> 
    <link rel = "stylesheet" type = "text/css" href = "./css/register.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./css/generic.css"/> 
  </head>
  <body>
        <nav class = "navbar">
            <h1>
                <a href = "index.php">
                    theWALL
                </a>
            </h1>
            <ul>
                <li><a href = "login.html">Iniciar Sesión</a></li>
            </ul>
        </nav>
        <!---------------------------------->
        <section class = "landing">
            <div class = "dark-overlay">
                <div class="landing-inner">
                    <img src="./img/Logo.png" alt="Logo"class="logoMed">
                    <h1 class = "x-large">Crea una cuenta</h1>
                    <form id="validacion" class="registro" onsubmit="return validar()" action="validarReg.php" method="POST" enctype="multipart/form-data">
<<<<<<< HEAD
                        <input type="text" name="user" placeholder="Nombre" id="name" class="imputtext" >
                        
                        <input type="text" name="apellido" placeholder="Apellido" id="apellido" class="imputtext" >

                        <input type="text" name="nombre" placeholder="Nombre de usuario" id="usr_name" class="imputtext" >
=======
                        <input type="text" name="nombre" placeholder="Nombre" id="usr_name" class="imputtext" >
                        
                        <input type="text" name="apellido" placeholder="Apellido" id="apellido" class="imputtext" >

                        <input type="text" name="user" placeholder="Nombre de usuario" id="usr" class="imputtext" >
>>>>>>> 193b6bd1ac86af9a15367b710417c1b73451fc5b
                        
                        <input type="text" name="email"  placeholder="Email" id="email" class = "imputtext">
                    
                        <input type="password" name="pass" id="passwd" placeholder="Contraseña" class="imputtext" >
                
                        <input type="password" name="repeatpass" placeholder="Repetir Contraseña" id="confirmpasswd" class="imputtext">
                        <br>
                        <label for="circulo">Elige una imagen de perfil</label>
                        <br>
                        <input type="file" accept="image/png,image/gif,image/jpeg" id="circulo" name="perfilimagen" class="perfil">
                        
                        <input class="boton" id="confirm" type="submit" value ="Registrarse"/>

                        <p id="error">******************************</p>
                    </form>

                    <p>
                    Ya tienes una cuenta? <a href="login.html">Ingresa</a></p>
                </div>
            </div>
        </section>
    </body>
</html>

