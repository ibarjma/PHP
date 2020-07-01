<?php
// Conexión a la base de datos
	require_once '../model/Users.php';
	$con = new Users();

	// Iniciar sesión
	session_start();
	if(isset($_SESSION["id_usuario"])){
		// Si trata de entrar a register.php estando logueado, lo manda al dashboard.php
        header("location: dashboard.php");
	}
	require '../views/register.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Valores del formulario de registro

    	$user= $_POST['user'];
		$nombre = $_POST['nombre'];
    	$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$pas = $_POST['pass'];
		$imagen = $_FILES['perfilimagen'];
		$target_dir = "../img/prof/";
		$target_file = $target_dir."User_".$user;		//Añadir, después de agregar a BD el ID como identificador de la foto.
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$regexCheck=FALSE;
		$regexLog="";

		// 1.- validar que inputs tengan formato solicitado

		if (!preg_match("/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/", $user)){
			$regexCheck=TRUE;
			$regexLog = $regexLog."Nombre de usuario incorrecto.\\n";
		}
		if (!preg_match("/^[A-Za-z]+(?:[ _-][A-Za-z]+)*$/", $nombre)){
			$regexCheck=TRUE;
			$regexLog = $regexLog."Formato de nombre incorrecto.\\n";
		}
		if (!preg_match("/^[A-Za-z]+(?:[ _-][A-Za-z]+)*$/", $apellido)){
			$regexCheck=TRUE;
			$regexLog = $regexLog."Formato de apellido incorrecto.\\n";
		}
		if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)){
			$regexCheck=TRUE;
			$regexLog = $regexLog."Email no valido.\\n";
		}
		if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/", $pas)){
			$regexCheck=TRUE;
			$regexLog = $regexLog."Password poco segura.\\n";
		}
		try{
			if(!getimagesize($imagen["tmp_name"]) && !($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" )){
				$regexCheck=TRUE;
				$regexLog = $regexLog."Hay un error con la imagen.\\n";
			}
		} catch (Exception $e){
			echo "";
		}

		if($regexCheck){
			echo '<script>alert("'.$regexLog.'");</script>';
			exit("Error en registro");
		} else{
			echo "<script>console.log('Todo ok con los datos')</script>";
		}
		
		// 2.- Verificamos que usuario y correo no exista antes:
			//Si existe, mostrar alerta
		if($con->idByCamp("nombreusuario",$user)){
			echo '<script>alert("Nombre de usuario no disponible.");</script>';
			exit("Error en registro");
		}
		if($con->idByCamp("email",$email)){
			echo '<script>alert("Ya hay una cuenta con ese correo");</script>';
			exit("Error en registro");
		}
				//Si no existe, Seguir

		// 3.- Guardamos imagen

		// 4.- Registramos usuario
		// $con->registUser($user, $nombre, $apellido, $email, $pas, $pic, $picFormat)
		// 5.- Alerta de Completo y regresamos a index.php
	
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
	// $errores = 0;

	// if($errores == 0){
	// 	// Cifrar la contraseña
	// 	$password_segura = password_hash($pas, PASSWORD_BCRYPT, ['cost'=>4]);
		
	// 	// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD

	// 	$sql = "INSERT INTO usuarios VALUES ( '', '$apellido', '$nombre', '$email', '$user', '$pas', '$contenido' , '$ext')";
	// 	$guardar = mysqli_query($conn, $sql);
	// 	var_dump($guardar);

	// 	if($guardar){
	// 		$_SESSION['completado'] = "El registro se ha completado con éxito: inicia sesión.";
	// 	}else{
	// 		$_SESSION['errores'] = "El usuario no se pudo registrar";
	// 	}
		
	// }else{
	// 	$_SESSION['errores'] = $errores;
	// }

	// header('Location: index.php');
}
?>