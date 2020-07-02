<?php

    require_once '../model/MeGusta.php';
    $conMeGusta = new MeGusta();
    require_once '../model/Mensaje.php';
    $conMensaje = new Mensaje();
    require_once '../model/Siguiendo.php';
    $conSiguiendo = new Siguiendo();
    require_once '../model/Users.php';
    $conUsers = new Users();


    // Iniciar sesión
    session_start();
    if(!isset($_SESSION["id_usuario"])){
        // Si trata de entrar a dashboard.php sin estar logueado, lo manda al login.php
        header("location: login.php");
    }

    // Publicar un post
    if(isset($_POST['publicar'])) {
        if ( $_FILES['unaimagen']['tmp_name'] != "none" ){
            $conMensaje->publicar($usuario, $_POST['texto'], $_FILES['unaimagen']['tmp_name'], pathinfo($_FILES["unaimagen"]['name'],PATHINFO_EXTENSION));
        } else {
            $conMensaje->publicar($usuario, $_POST['texto'],);
        }
    }


    // 1. Obtener ID del usuario logueado 
    $usuario = $_SESSION["id_usuario"];
    // $usuario = 1; //Solo para testear

    // 2. Obtener lista de personas a las que sigue
    $seguidos = $conSiguiendo->SeguidosPor($usuario);

    // 3. Obtener lista de 50 publicaciones más recientes de personas a quienes sigue
    //      Esto tambien devuelve nombre, apellido, user name y profilPic.
    $publicacionesMySQL = $conMensaje->getPubSeguidos($seguidos);
    $publicaciones = array();
    $likesArray = array();
    $megusta = array();

    // 3.5. Obtener datos basicos de usuarios a los que sigue 
    $users = array();

    //Esto nos da como resultado una matriz. el primer [] es el numero de la pub, 
    // y el segundo [] seria el contenido de la publicacion
    // ej. $publicaciones[0]["texto"]
    if ($publicacionesMySQL){
        while($row = $publicacionesMySQL->fetch_assoc()) {
            $publicaciones[] = $row;
        }

    // 4. Obtener likes de las publicaciones obtenidas en un array espejo de las publicaciones
    //      y si el usuario dio like
        foreach($publicaciones as $publicacion){
            $likesArray[] = $conMeGusta->contarLikes($publicacion["id"]);
            $megusta[] = $conMeGusta->dioLike($usuario, $publicacion["id"]);
        }
    } 
    
    // 5. Mostrar publicaciones
    require '../views/dashboard.php';
    
?>