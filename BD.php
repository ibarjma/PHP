<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'db';
$conn = mysqli_connect($servidor, $usuario, $password, $basededatos);

if(mysqli_connect_errno($conn)){
	echo "fallo la conexion al servidor :".mysqli_connect_error();

}else{
	echo "se conecto piola";
}
mysqli_query($conn, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
} 
?>