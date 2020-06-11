  var user = document.getElementsByName('usr').value;
  var nombre = document.getElementsByName('usr_name').value;
  var email = document.getElementsByName('email').value;
  var pass = document.getElementsByName('passwd').value;
  var confirmpass = document.getElementsByName('confirmpasswd').value;
  var userRegex= /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/
  var nombreRegex = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/
  var emailRegex = /^[^@]+@[^@][^@\.]+[^@]$/
  var passRegex= /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;


function validarFormulario() {

    if(user==="" || !userRegex.test(user)){
      alert("Debe ingresar un nombre de usuario válido");
      document.validacion.usr.focus();
      return false;
    }else{
      if(nombre==="" || !nombreRegex.test(nombre)){
        alert("Debe ingresar un nombre válido");
        document.validacion.usr_name.focus();
        return false;
    }else{
      if(email==="" || !(emailRegex.test(email)){
        alert("Debe ingresar un email válido");
        document.validacion.email.focus();
        return false;
    } else{
      if(pass==="" || !passRegex.test(pass)){
        alert("Debe ingresar una contraseña válida");
        document.validacion.pass.focus();
        return false;
    } else {
      if (confirmpass !== pass){
        alert("Debe ingresar la misma contraseña nuevamente");
        document.validacion.pass.focus();
        return false;
      } else {
        alert("El formulario ha sido enviado con éxito.")
            }
          }
        }
      }
    }
  }





