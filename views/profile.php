<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Mi Perfil</title>
  <link rel="icon" href="../img/Logo.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/profile.css" />
  <link rel="stylesheet" type="text/css" href="../css/generic.css" />
</head>

<body style="color: aliceblue;">
  <nav style="justify-content: flex-end;" class = "navbar">
    <h1>
        <a href = "dashboard.html">
            <img src="../img/Logo.ico" alt="Logo" class="imgLoged">
            theWALL
        </a>
    </h1>
  </nav>
  <section class="landing3">
   <div class="dark-overlay">
    <div class="landing-inner"> 
     <div class="wrapper">
        <div class="item2">
          <img id="myphoto" class="round-img my-1"  src="../img/face.png" >
          <h1 id="myname">Nombre</h1>
        
          <ld id="myusuario" class="lead">nombre de usuario</ld><span style="float: right; padding-right: 10px;" class="icons my-1">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
          </span>  <br>    
          <input type="button" id="editar" style="margin-top: 10px;" name="edit" value="Seguir/Dejar de Seguir">
        </div>
     
        <div class="item4">
            <h2 style="margin-top: 5px;" class="p-1 text-primary">
              <div class="line" style="margin-bottom: 5px;"></div>
               Publicaciones
              </h2>
              <div class="PagCont">
                <div class="wall">           
                  <form  id="mispubli" method="GET" action="publis">
          
                    <div class="post">
                  
                      <div class="profPic">
                        <img src="../img/face.png" alt="Foto de perfil">
                  
                      </div>
                  
                      <div class="contPost">
                    
                        <a href="profile.html" class="usr">Lolito</a>
                        <p class="textPost">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi beatae vitae quae reiciendis, sunt, ex earum adipisci ratione dolore architecto, iure nesciunt autem aperiam accusamus minus nemo! Ut, temporibus impedit.</p>

                        <div class="imgContenedor">
                                <img src="../img/meme.jpg" alt="imagenPost">
                        </div>
                        <button class="likeBtn"><i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>

                    <div class="post">
                  
                      <div class="profPic">
                        <img src="../img/face.png" alt="Foto de perfil">
                  
                      </div>
                  
                      <div class="contPost">
                    
                        <a href="profile.html" class="usr">Lolito</a>
                        <p class="textPost">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi beatae vitae quae reiciendis, sunt, ex earum adipisci ratione dolore architecto, iure nesciunt autem aperiam accusamus minus nemo! Ut, temporibus impedit.</p>

                        <div class="imgContenedor">
                                <img src="../img/meme.jpg" alt="imagenPost">
                        </div>
                        <button class="likeBtn"><i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>   
                  </form>
                </div>
              </div>          
            </div>   
          </div>
        </div>
  </section>  
      
    <footer id="footer">
    <a href="dashboard.html" class="btn izq">Volver al Inicio</a><span class="m-1 p-1"> Creado por: Guillermo Ballesteros & Juan Manuel Ibarra</span>
   </footer>
  </section>
</body>
</html>