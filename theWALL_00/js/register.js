// Funcion que se mandó llamar con el onsubmit del form. 222WWWwww
function checkForm()
  {
    // Ponemos la sección del form en una variable
    var form = document.f_registro

    // Evaluamos usando la variable del form + .nameDelInput + .value
    if(form.nombre.value == ""){
        // Ponemos una alerta por el error encontrado
        alert("Error: Falta Nombre Completo");
        form.preventDefault()
      return false;
    }
    if(form.user.value == "") {
      alert("Error: Falta nombre de usuario");
      form.preventDefault()
      return false;
    }
    re = /^([A-Za-z]+\s)+([A-Za-z]+)$/;
    if(!re.test(form.nombre.value)) {
      alert("Error: Nombre no valido");
      form.preventDefault()
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user.value)) {
        alert("Error: Nombre de usuario no valido.");
        form.preventDefault()
        return false;
      }

    if(form.pswd.value != "" && form.pswd.value == form.pswdC.value) {
      if(form.pswd.value.length < 8) {
        alert("Error: El pasword debe ser de minimo 8 caracteres!");
        form.preventDefault()
        return false;
      }
      if(form.pswd.value == form.usr.value) {
        alert("Error: El password debe ser diferente al usuario!");
        form.preventDefault()
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pswd.value)) {
        alert("Error: El pasword debe terner por lo menos un numero!");
        form.preventDefault()
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pswd.value)) {
        alert("Error: El pasword debe contener al menos una minuscula");
        form.preventDefault()
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pswd.value)) {
        alert("Error: El pasword debe tener al menos una mayuscula");
        form.preventDefault()
        return false;
      }
    } else {
      alert("Error: Los passwords no coinciden");
      form.preventDefault()
      return false;
    }
    return true;
  }

  document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "Email válido";
    } else {
      valido.innerText = "Email incorrecto";
    }
});





