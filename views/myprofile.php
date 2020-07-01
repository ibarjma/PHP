<!doctype html>
<html lang="en">
<?php
	
	require_once '../model/MeGusta.php';
    $conMeGusta = new MeGusta();
    require_once '../model/Mensaje.php';
    $conMensaje = new Mensaje();
    require_once '../model/Siguiendo.php';
    $conSiguiendo = new Siguiendo();
    require_once '../model/Users.php';
    $conUsers = new Users();
    ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Mi Perfil</title>
  <link rel="icon" href="../img/Logo.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/myprofile.css" />
  <link rel="stylesheet" type="text/css" href="../css/generic.css" />
  <link rel="stylesheet" href="../css/people.css">
  <link rel="stylesheet" href="../css/dashboard.css">

  <script src="../js/people.js"></script>
  <script src="../js/post.js"></script>
</head>

<body>
  	<nav class = "navbar">
    	<h1>
      		<a href = "dashboard.html">
        		<img src="../img/Logo.ico" alt="Logo" class="imgLoged">
        		theWALL
      		</a>
    	</h1>
    	<div class="search">
    	  	<input type="text" class="searchTerm" placeholder="¿Busca a alguien?">
    	  	<button type="submit" class="searchButton">
    	  	    <a class="fa fa-search" href="people.php"></a>
    	  	</button>
    	</div>
    	<ul class="links">
    	  	<li><a href = "dashboard.php">Inicio</a></li>
    	  	<li><a href = "myprofile.php">Perfil</a></li>
    	  	<li><a href = "../index.php">Cerrar sesión</a></li>
    	</ul>
  	</nav>
  	<section class = "landing">
    	<div class = "dark-overlay">
      		<div class="landing-inner">
				<div class="detalles">
					<div class="perfil">
						<div class="profPic">
						<?php 
                                if($misdatos['foto_contenido']){
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $misdatos['foto_contenido'] ).'" width="600" />';
								} ?>
						</div>
					
						<div class="names">
							<h2><?= $misdatos['nombre']." ".$misdatos['apellido'];?></h2>
							<h3><?= $misdatos['nombreusuario'];?></h3>
						</div>
					</div>
					<hr>
					<div class="siguiendo">

					<?php
						
                        if(!empty($usuariosquesigo) && mysqli_num_rows($usuariosquesigo)>=1):
						
						foreach ($usuariosquesigo as $unusuario):		
                        ?>
						<div class="person">
							<div class="profPic">
							<?php 
                                if($unusuario['foto_contenido']){
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $unusuario['foto_contenido'] ).'" width="100" />';
                                } ?>
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name"><?= $unusuario['nombre'].$unusuario['apellido'];?></a>
								<p class="usr"><?= $unusuario['nombreusuario'];?></p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<?php
                        endforeach;
                    else:
                    ?>
                    <div class="alerta"> No sigues a ningún usuario aún!</div>
                    <?php endif; ?>
                    </div>
			
					<div class="editProfile">
						<a href="editProfile.html"><button class="editProfBtn" >Editar Perfil</button></a>
					</div>
				</div>
        		<div class="publicaciones">
				<form class="publicar" method="POST" action="<?= $_SERVER['PHP_SELF']?>"  enctype="multipart/form-data">
                        <label>Crear Publicacion:</label>
                        <textarea type="text" name='texto' class="toPost" maxlength="140"></textarea>
                        <div class="options">
                            <input type="file" name="unaimagen" class="botonimagen" alt="Sube una foto" accept="image/png,image/gif,image/jpeg">
                            <input type="submit" class="publBtn" value="Publicar" name="publicar">
                        </div>
                    </form>
					<div class="wall">
					<?php
                        if(!empty($mispublis) && mysqli_num_rows($mispublis)>=1):
						
						while ($publi = mysqli_fetch_assoc($mispublis)):

                        ?>
                        <div class="post">
                            <div class="profPic">
							<?php 
                                if($misdatos['foto_contenido']){
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $misdatos['foto_contenido'] ).'" width="600" />';
                                } ?>
                            </div>
                            <div class="contPost">
                                <a href="profile.html" class="usr"><?= $misdatos['nombreusuario'];?></a>
                                <p class="textPost"><?= $publi['texto'];?></p>

                                <div class="imgContenedor">
								<?php 
                                if($publi['imagen_contenido']){
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $publi['imagen_contenido'] ).'" width="600" />';
                                } ?>
								</div>
							                        
                                <i class="likeBtn fa fa-heart fa-heart-o" aria-hidden="true" onclick=like(this)></i>
						
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
				</div>
     		 </div>
    	</div>
  	</section>
</body>
</html>