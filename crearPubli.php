<?php

if(isset($_POST)){
	
    require_once 'BD.php';
    
    if(!isset($_SESSION)){
		session_start();
    }
    
$texto = $_POST['texto'];
$ima = $_FILES['unaimagen']['tmp_name'];
$imaContenido = addslashes(file_get_contents($ima));
$filename =  $_FILES['unaimagen']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

// $date = MYSQLI_TYPE_DATETIME;

$usuario = ($_SESSION['usuario']['id']);

$sql = "INSERT INTO mensaje VALUES ( '', '$texto', '$imaContenido', '$ext', '$usuario', now())";
$guardar = mysqli_query($conn, $sql);


var_dump($usuario);
var_dump($guardar);


// header('Location: dashboard.php');
}