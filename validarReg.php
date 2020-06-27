<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'BD.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}
	
    //Valores del formulario de registro

    $user= $_POST['user'];
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
    $pas = $_POST['pass'];
	
	$imagen = $_FILES['perfilimagen'];
	$contenido = addslashes(file_get_contents($imagen['tmp_name']));
	
	$filename =  $_FILES['perfilimagen']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

	
    // if(!is_dir('images')){
	// 	mkdir('images', 0777);
	// }
	
	// move_uploaded_file($imagen['tmp_name'], 'images/'.$filename);

	// 		$gestor = opendir('./images');
			
	// 		if($gestor):
	// 			while(($imagen = readdir($gestor)) !== false):
	// 				if($imagen != '.' && $imagen != '..'):
	// 					echo "<img src='images/$imagen' width='200px'/><br/>";
	// 				endif;
	// 			endwhile;
	// 		endif;

	// Validar que el user no exista y que la imagen esté definida
	$errores = 0;

	if($errores == 0){
		// Cifrar la contraseña
		$password_segura = password_hash($pas, PASSWORD_BCRYPT, ['cost'=>4]);
		
		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD

		$sql = "INSERT INTO usuarios VALUES ( '', '$apellido', '$nombre', '$email', '$user', '$pas', '$contenido' , '$ext')";
		$guardar = mysqli_query($conn, $sql);
		var_dump($guardar);

		if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con éxito: inicia sesión.";
		}else{
			$_SESSION['errores'] = "El usuario no se pudo registrar";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}
header('Location: index.php');