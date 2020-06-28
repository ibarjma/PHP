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

    
    // $row = mysqli_fetch_array($result); 
	// mysqli_close($conn); 

	// // se imprime la imagen y se le avisa al navegador que lo que se está 
	// // enviando no es texto, sino que es una imagen de un tipo en particular
    // header("Content-type: " .$row['imagen_tipo']);
    // echo ($row['imagen_contenido']);   
