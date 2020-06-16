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
    $password = $_POST['pass'];
    $imagen = $_FILES['perfilimagen'];

    // var_dump($imagen);
    
    
    $filename =  $imagen['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    

    if(!is_dir('images')){
		mkdir('images', 0777);
	}
	
	move_uploaded_file($imagen['tmp_name'], 'images/'.$nombre.$ext);
	
	// header("Refresh: 5; URL=index.php");
	echo "<h1>Imagen subida correctamente</h1>";
    // var_dump($ext);


			$gestor = opendir('./images');
			
			if($gestor):
				while(($imagen = readdir($gestor)) !== false):
					if($imagen != '.' && $imagen != '..'):
						echo "<img src='images/$imagen' width='200px'/><br/>";
					endif;
				endwhile;
			endif;

    

    // $sql = "INSERT INTO usuarios VALUES( '' , '$apellido', '$nombre','$email', '$user', '$password', '$imagen', '$ext')";
	// $guardar = mysqli_query($conn, $sql);
	// Array de errores
	$errores = array();
	
	// Validar que el user no exista y que la imagen esté definida

	
	$guardar_usuario = false;
    

	if(count($errores) == 0){
		
		// Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
		
		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES( '' , '$apellido', '$nombre','$email', '$user', '$password_segura', '$imagen', '$ext')";
		$guardar = mysqli_query($conn, $sql);

		if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con éxito";
		}else{
			$_SESSION['errores']['general'] = "El usuario no se pudo registrar";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}
// header('Location: index.php');