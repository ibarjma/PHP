<?php
// Conexión a la base de datos
	require_once '../model/MeGusta.php';
    $conMeGusta = new MeGusta();

    $publicacion["id"] = '1';
    $usuario = '2';
    $likesArray = $conMeGusta->contarLikes($publicacion["id"]);
    $megusta = $conMeGusta->dioLike($usuario, $publicacion["id"]);
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

$esLike = 'null';
if ($megusta){$esLike = "Dislike";} else {$esLike = "Like";}


    if($_POST['like']) {
        if ($megusta){
            $esLike = "Like";
            $res = $conMeGusta->quitarLike($usuario, $publicacion["id"]);
            $likesArray = $conMeGusta->contarLikes($publicacion["id"]);
            $megusta = $conMeGusta->dioLike($usuario, $publicacion["id"]);
            echo "<script>console.log('---".$likesArray."---".$megusta."')</script>";
        } else {
            $esLike = "Dislike";
            $res = $conMeGusta->darLike($usuario, $publicacion["id"]);
            $likesArray = $conMeGusta->contarLikes($publicacion["id"]);
            $megusta = $conMeGusta->dioLike($usuario, $publicacion["id"]);
            echo "<script>console.log('---".$likesArray."---".$megusta."')</script>";
        }
    }
?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type = "submit" value = "<?php echo $esLike;?>" name='like' class="likeBtn"/>
        <span id="counter"><?php echo $likesArray;?></span>
    </form>

</body>
</html>