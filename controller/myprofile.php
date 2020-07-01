<?php
    require_once '../model/Conexion.php';

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

    $usuario = $_SESSION["id_usuario"];

    // Publicar un post
    if(isset($_POST['publicar'])) {
        if ( $_FILES['unaimagen']['tmp_name'] != "none" ){
            $conMensaje->publicar($usuario, $_POST['texto'], $_FILES['unaimagen']['tmp_name'], $_FILES["unaimagen"]["type"]);
        } else {
            $conMensaje->publicar($usuario, $_POST['texto'],);
        }
    }

    // Obtener mi lista de mensajes:
    $mispublis = $conMensaje-> getMisPubli($usuario);


    // 2. Obtener lista de personas a las que sigue
    $seguidos = $conSiguiendo->SeguidosPor($usuario);
   
    $misdatos = $conUsers->contenidoById($usuario);


    $usuariosquesigo = $conSiguiendo->getDatosSeguidos($seguidos);
    //  // 4. Obtener likes de las publicaciones obtenidas en un array espejo de las publicaciones
    // //      y si el usuario dio like
    // foreach($mispublis as $publicacion){
    //     $likesArray[] = $conMeGusta->contarLikes($publicacion["id"]);
    //     $megusta[] = $conMeGusta->dioLike($usuario, $publicacion["id"]);
    // }



    require '../views/myprofile.php';

?>