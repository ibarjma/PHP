function validar(){
  var ur = document.getElementById('usr');
  var ape = document.getElementById('apellido');
  var nombre = document.getElementById('usr_name');
  var email = document.getElementById('email');
  var pass = document.getElementById('passwd');
  var confirmpass = document.getElementById('confirmpasswd');
  var parrafo = document.getElementById('error');

  let avisos = false;
  let errores = "";
  let userRegex= /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/
  let nombreRegex = /^[A-Za-z]+(?:[ _-][A-Za-z]+)*$/
  let emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  let passRegex= /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/
  parrafo.innerHTML = "";
  if(!userRegex.test(ur.value)){
    errores += "Debe ingresar un nombre de usuario válido <br>";
    avisos = true;
  }
    if(!nombreRegex.test(nombre.value)){
      errores +="Debe ingresar un nombre válido <br>";
      avisos = true;
  }
  if(!nombreRegex.test(ape.value)){
    errores +="Debe ingresar un apellido válido <br>";
    avisos = true;
  }
  if(!emailRegex.test(email.value)){
    errores +="Debe ingresar un email válido <br>";
    avisos = true;
  }
    if(!passRegex.test(pass.value)){
      errores +="Debe ingresar una contraseña válida <br>";
      avisos = true;
  } 
    if (confirmpass.value != pass.value){
      errores +="Debe ingresar la misma contraseña nuevamente <br>"
      avisos = true;
    } 
    if(avisos){
      parrafo.innerHTML = errores;
      return false;
    }else{
    parrafo.innerHTML = "El formulario ha sido enviado con éxito."
    return true;
          }
        }
