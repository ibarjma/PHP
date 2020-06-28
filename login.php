<?php 
    	require_once 'BD.php';

        // Iniciar sesión
        if(!isset($_SESSION)){
            session_start();
        }
        ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Iniciar Sesión</title>
    <link rel="icon" href="./img/Logo.ico" type="image/x-icon"/>
    <link rel = "stylesheet" type = "text/css" href = "./css/header.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./css/generic.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./css/login.css"/>
    <script src="./js/login.js"></script>
</head>
<body>
    <nav class = "navbar">
        <h1>
            <a href = "index.php">
                <img src="./img/Logo.ico" alt="Logo">
                theWALL
            </a>
        </h1>
        <ul>
            <li><a href = "register.php">Registrarse</a></li>
        </ul>
    </nav>
<section class = "landing2">
    <div class = "dark-overlay">
    <section class = "container">
        <div class="cont_in">
            <div class="text-sup">
                <h1>Iniciar Sesión</h1>
            </div>
<<<<<<< HEAD:login.html
            <form id="log_in" class="login" onsubmit="return validaringreso()" action="dashboard.html" method="POST">
                <input type="text" id="usr_name" class="inputtext" placeholder="Nombre de Usuario">
                <input type="password" id="passwd" class="inputtext" placeholder="Contrase&ntilde;a">
=======

            <!-- consultar user y pass -->

            <!-- utilizar una sesion para guardar datos del usuario logueado -->

            <!-- redirigir a dashboard o devolver una alerta -->

            
            <form id="log_in" class="login" onsubmit="return validaringreso()" action="validarIni.php" method="POST">
                <input name="user" type="text" id="usr" class="inputtext" placeholder="Nombre de Usuario">
                <input name="pass" type="password" id="passwd" class="inputtext" placeholder="Contrase&ntilde;a">
>>>>>>> 193b6bd1ac86af9a15367b710417c1b73451fc5b:login.php
                <input type="submit" class="boton btn btn-primary" value="Iniciar Sesion">
                <p id="error">********************</p>
                
     
            </form>
            <div class="separador">
                <div class="row"></div>
                <div class="circle">o</div>
                <div class="row"></div>
            </div>
            <div class="reg">
                <p>¿No tienes cuenta?
                    <a href="./register.html">
                        <span>Registrate</span>
                    </a>
                </p>
            </div>
            
        </div>
    </section>
    </div>
</section>
</body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>