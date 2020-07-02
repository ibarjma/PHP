<!doctype html>
<html lang="en">
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
    	  	    <a class="fa fa-search" href="people.html"></a>
    	  	</button>
    	</div>
    	<ul class="links">
    	  	<li><a href = "dashboard.html">Inicio</a></li>
    	  	<li><a href = "myprofile.html">Perfil</a></li>
    	  	<li><a href = "index.php">Cerrar sesión</a></li>
    	</ul>
  	</nav>
  	<section class = "landing">
    	<div class = "dark-overlay">
      		<div class="landing-inner">
				<div class="detalles">
					<div class="perfil">
						<div class="profPic">
							<img src="../img/face.png" alt="Foto de perfil">
						</div>
						<div class="names">
							<h2>Nombre Completo</h2>
							<h3>userName</h3>
						</div>
					</div>
					<hr>
					<div class="siguiendo">
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
						<div class="person">
							<div class="profPic">
								<img src="../img/face.png" alt="Foto de perfil">
							</div>
							<div class="description">
								<a href="profile.html" class="usr_name">Franciso Tormenta</a>
								<p class="usr">pacostorm201</p>
							</div>
	
							<div class="follow">
								<button class="followButton unfollowButton" onclick=follow(this)>Dejar de seguir</button>   
							</div>
						</div>
					</div>
					<div class="editProfile">
						<a href="editProfile.html"><button class="editProfBtn" >Editar Perfil</button></a>
					</div>
				</div>
        		<div class="publicaciones">
          			<form class="publicar" method="post" >
            			<label>Crear Publicacion:</label>
            			<textarea type="text" class="toPost" maxlength="240"></textarea>
            			<div class="options">
            			    <input type="file" class="botonimagen" alt="Sube una foto" accept="image/png,image/gif,image/jpeg">
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

							//   $sql =" INSERT INTO me_gusta VALUES ('', '89', '32');";    
                            //   $m = mysqli_query($conn, $sql);  
						    //   var_dump($m);	
							//   $sql =" INSERT INTO me_gusta VALUES ('', '90', '32');";    
                            //   $m = mysqli_query($conn, $sql);  
						    //   var_dump($m);	
                        ?>
                        <div class="post">
                            <div class="profPic">
                                <img src="../img/face.png" alt="Foto de perfil">
                            </div>
                            <div class="contPost">
                                <a href="profile.html" class="usr">Lolito</a>
                                <p class="textPost"><?= $publi['texto'];?></p>

                                <div class="imgContenedor">
                                <img src="mostrarImagen.php?id=<?=$publi['id'];?>" width="600">
								</div>
								
								<?php 
                                
                                $id= $publi['id'];
                                
                                $sql = "SELECT * FROM me_gusta WHERE mensaje_id = $id;";   
                                $mgs = mysqli_query($conn, $sql);
                
                                $megusta=false;
								$cant = mysqli_num_rows($mgs);
								
                                if(!empty($mgs) && mysqli_num_rows($mgs)>=1){
                                    
                                 
                                    while ($mg = mysqli_fetch_assoc($mgs)){
                                        if($mg['usuarios_id'] == $u){
                                            $megusta=true;
                                        }
                                    }
                                }
                                // // ONCLICK:      
                                // if($megusta = false){ 
                                // // megustear
                                // $sqf =" INSERT INTO me_gusta VALUES ('', '$u', '$id');";    
                                // $m = mysqli_query($conn, $sqf);    
                                // }else{
                                // //desmegustear     
                                // $squ ="DELETE FROM `me_gusta` WHERE `me_gusta`.`mensaje_id` = $id;";
                                // $g = mysqli_query($conn, $squ);     
                                // }
								?>
								<?php
								if($megusta=false): ?>
                                <i class="likeBtn fa fa-heart fa-heart-o" aria-hidden="true" onclick=like(this)></i>
								<?php
								else:
								?>
								<i class="likeBtn fa fa-heart fa-heart-o" aria-hidden="true" onclick=like(this)></i>
								<?php
								endif;
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
				</div>
     		 </div>
    	</div>
  	</section>
</body>
</html>