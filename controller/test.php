<?php
// Conexión a la base de datos
	require_once '../model/Users.php';
    $con = new Users();

    $con->updateCuenta('ppmail@mail.com', 'EstoNoEsSeguro', '2');
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/post.js"></script>
    <title>Document</title>
</head>
<body>

<form id="validacion" class="registro" onsubmit="" action="test.php" method="POST" enctype="multipart/form-data">

                        <label for="circulo">Elige una imagen de perfil</label>
                        <br>
                        <input type="file" accept="image/png,image/gif,image/jpeg" id="circulo" name="perfilimagen" class="perfil">
                        
                        <input class="boton" id="confirm" type="submit" value ="Send"/>
                    </form>

</body>
</html>