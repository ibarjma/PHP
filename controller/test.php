<?php
// Conexión a la base de datos
	require_once '../model/Users.php';
    $con = new Users();

    $temp = $con->searchUser('panchopantera');
    echo '<script>console.log("'.$temp.'");</script>';
?>