<!DOCTYPE html>
<html lang="es">
<?php
	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
    }
    var_dump($_SESSION['id_usuario']);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Inicio</title>
    <link rel="icon" href="../img/Logo.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../css/generic.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="../js/post.js"></script>
</head>
<body class="dashboard ">
    <nav class = "navbar">
        <h1>
            <a href = "dashboard.html">
                <img src="../img/Logo.ico" alt="Logo" class="imgLoged">
                theWALL
            </a>
        </h1>

        <form class="search" action="people.php" method="GET">
            <input type="text" name="busqueda" class="searchTerm" placeholder="¿Busca a alguien?">
            <input type="submit" value="buscar" class="srcBtn" >
         </form>

        <ul class="links">
            
            <li><a href = "dashboard.php">Inicio</a></li>
            <li><a href = "myprofile.php">Perfil</a></li>
            <li><a href = "index.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section class = "landing">
        <div class = "dark-overlay">
            <div class="landing-inner">
                <div class="PagCont">
                    <form class="publicar" method="POST" action="crearPubli.php"  enctype="multipart/form-data">
                        <label>Crear Publicacion:</label>
                        <textarea type="text" name='texto' class="toPost" maxlength="140"></textarea>
                        <div class="options">
                            <input type="file" name="unaimagen" class="botonimagen" alt="Sube una foto" accept="image/png,image/gif,image/jpeg">
                            <input type="submit" class="publBtn" value="Publicar">
                        </div>
                        </form>
                    <div class="wall">
                        <?php
                        $u = $_SESSION['usuario'];
                
                        $sql = "SELECT * FROM mensaje WHERE usuarios_id = $u ORDER BY id DESC;";

                        $publis = mysqli_query($conn, $sql);

                        if(!empty($publis) && mysqli_num_rows($publis)>=1):
                        while ($publi = mysqli_fetch_assoc($publis)):
                            
                            $id= $publi['id'];
                                
                            $sql = "SELECT * FROM me_gusta WHERE mensaje_id = $id;";   
                            $mgs = mysqli_query($conn, $sql);
            
                            $megusta=false;
                            
                            if(!empty($mgs) && mysqli_num_rows($mgs)>=1){
                                $cant = mysqli_num_rows($mgs);
                                var_dump($cant);
                                while ($mg = mysqli_fetch_assoc($mgs)){
                                    if($mg['usuarios_id'] == $_SESSION['usuario']){
                                        $megusta=true;
                                    }
                                }
                            }
                        ?>
                        <div class="post">
                            <div class="profPic">
                                <img src="./img/face.png" alt="Foto de perfil">
                            </div>
                            <div class="contPost">
                                <a href="profile.html" class="usr">Lolito</a>
                                <p class="textPost"><?= $publi['texto'];?></p>

                                <div class="imgContenedor">
                                <img src="mostrarImagen.php?id=<?=$publi['id'];?>" width="600">
                                </div>
                                <i class="likeBtn fa fa-heart fa-heart-o" aria-hidden="true" onclick=like(this)></i>

                                <?php 
                                
                                $id= $publi['id'];
                                
                                $sql = "SELECT * FROM me_gusta WHERE mensaje_id = $id;";   
                                $mgs = mysqli_query($conn, $sql);
                
                                $megusta=false;
                                
                                if(!empty($mgs) && mysqli_num_rows($mgs)>=1){
                                    $cant = mysqli_num_rows($mgs);
                                    var_dump($cant);
                                    while ($mg = mysqli_fetch_assoc($mgs)){
                                        if($mg['usuarios_id'] == $_SESSION['usuario']){
                                            $megusta=true;
                                        }
                                    }
                                }
                                // ONCLICK:      
                                if($megusta = false){ 
                                // megustear
                                $sqf =" INSERT INTO me_gusta VALUES ('', '$u', '$id');";    
                                $m = mysqli_query($conn, $sqf);    
                                }else{
                                //desmegustear     
                                $squ ="DELETE FROM `me_gusta` WHERE `me_gusta`.`mensaje_id` = $id;";
                                $g = mysqli_query($conn, $squ);     
                                }
                                ?>
                                <span id="counter"><?php if(isset($cant)){ echo $cant; }else{ echo '0';} ?></span>
                            </div>
                        </div>  
                        <?php
                        endwhile;
                    else:
                    ?>
                    <div class="alerta"> No se encontraron mensajes en tu muro.</div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>