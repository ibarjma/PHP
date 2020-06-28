<?php

if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'BD.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}
	
    //Valores del formulario

    $user= $_POST['user'];
    $pas = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE nombreusuario = '$user'";
    
    $login = mysqli_query($conn, $sql);
    var_dump($login);
    var_dump($_SESSION['usuario']);
    
    if($login){

        $us = mysqli_fetch_assoc($login);

        // $verificar = password_verify($pas, $us['contrasenia']);
        if ($pas == $us['contrasenia']){
           
            $_SESSION['usuario']= $us['id'];

            // if(isset($_SESSION['error_login'])){
            //     session_unset($_SESSION['error_login']);
            // }
    
    //     }else{
    //         $_SESSION['error_login'] = "Falló el inicio de sesión";
    //     }
		
	// }else{
    //     $_SESSION['error_login'] = "Falló el inicio de sesión";
	}
    }
}
// if(isset($_SESSION['usuario'])){
     header('Location: dashboard.php');
//  }else{
//     header('Location: login.php');