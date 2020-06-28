<?php 
require_once 'BD.php';

// Iniciar sesión
    if(!isset($_SESSION)){
        session_start();
     }
	// se recibe el valor que identifica la imagen en la tabla
	$idpubli = $_GET['id']; 


	// se recupera la información de la imagen
	$sql = "SELECT imagen_contenido, imagen_tipo FROM mensaje WHERE id=$idpubli"; 

    $result = mysqli_query($conn, $sql); 
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();

        //mostrar imagen ;

        header("Content-type: image/jpg");
        echo $imgDatos['imagen_contenido'];
    }else{
        echo 'imagen inecsistente..';
    }

    