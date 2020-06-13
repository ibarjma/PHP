const nombre = document.getElementById('usr_name');
const pass = document.getElementById('passwd');
const validacion = document.getElementById('log_in');


validacion.addEventListener("submit", ev =>{ 
  ev.preventDefault();
  let avisos= true
  let errores = ""

  parrafo.innerHTML = ""
  if(user.value == "" || user.value == null){
    errores += "Debe ingresar un nombre de usuario <br>"
  }
    if(pass.value == "" || pass.value == null){
      errores +="Debe ingresar una contraseña válida <br>";
      avisos = true
  } 
    if(avisos){
      parrafo.innerHTML = errores
    }else{
    parrafo.innerHTML = "El formulario ha sido enviado con éxito."
          }
        })

    
