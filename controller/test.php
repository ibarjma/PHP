<?php
// Conexión a la base de datos
	require_once '../model/Mensaje.php';
    $con = new Mensaje();
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

<?php  

    $usuario = '1';

    
    if(isset($_POST['publicar'])) {
        if ( $_FILES['unaimagen']['tmp_name'] != "none" ){
            $con->publicar($usuario, $_POST['texto'], $_FILES['unaimagen']['tmp_name'], $_FILES["unaimagen"]["type"]);
        } else {
            $con->publicar($usuario, $_POST['texto'],);
        }
    }

?>
    <form class="publicar" method="POST" action="<?= $_SERVER['PHP_SELF']?>"  enctype="multipart/form-data">
        <label>Crear Publicacion:</label>
        <textarea type="text" name='texto' class="toPost" maxlength="140"></textarea>
        <div class="options">
            <input type="file" name="unaimagen" class="botonimagen" alt="Sube una foto" accept="image/png,image/gif,image/jpeg">
            <input type="submit" class="publBtn" value="Publicar" name="publicar">
        </div>
    </form>

</body>
</html>