<?php 
    	// Iniciar sesión
        if(!isset($_SESSION)){
            session_start();
        }
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Resultados de busqueda</title>
    <link rel="icon" href="./img/Logo.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/generic.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/people.css">
    <script src="./js/people.js"></script>
</head>
<body class="people">
    <!-- Barra superior -->
    <nav class = "navbar">
        <h1>
            <a href = "dashboard.html">
                <img src="./img/Logo.ico" alt="Logo" class="imgLoged">
                theWALL
            </a>
        </h1>

        <div class="search">
            <input type="text" class="searchTerm" placeholder="Ejemplo de busqueda">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
           </button>
         </div>

        <ul class="links">
            
            <li><a href = "dashboard.html">Inicio</a></li>
            <li><a href = "myprofile.html">Perfil</a></li>
            <li><a href = "index.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <!-- ~~~~~ o ~~~~~ -->


    <section class = "landing">
        <div class = "dark-overlay">
            <div class="landing-inner">
                <div class="resultados"> 
                    <?php
                    if($_GET['busqueda']){
                        $bus = $_GET['busqueda'];
                        $sql= "SELECT * FROM usuarios WHERE concat_ws(nombre, apellido, nombreusuario) LIKE '%$bus%' ";
                        $buscar = mysqli_query($conn, $sql);
                    }
                    if(!empty($buscar) && mysqli_num_rows($buscar)>=1):
                        while ($busca = mysqli_fetch_assoc($buscar)):

                    ?>

                    
                        <div class="person">
                            <div class="profPic">
                                <img src="<?php $busca['foto_contenido']?>"  alt="Foto de perfil">
                            </div>
                            <div class="description">
                                <a href="profile.php?id=<?=$busca['id']?>" class="usr_name"><p><?=$busca['nombreusuario']?></p></a>
                                <p class="usr"><?= $busca['nombre'].' '.$busca['apellido']?></p>
                            </div>

                            <div class="follow">
                                <button class="followButton" onclick=follow(this)>Seguir</button>   
                            </div>
                            
                        </div>
                        <?php
                        endwhile;
                    else:
                    ?>
                    <div class="alerta"> No se encontraron usuarios relacionados con su búsqueda.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>