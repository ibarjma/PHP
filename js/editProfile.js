function validarPerfil(){
    var nombre = document.getElementById('name');
    var ape = document.getElementById('apellido');
    var usr = document.getElementById('usr_name');
  
    let avisos = false;
    let errores = "";
    let userRegex= /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/
    let nombreRegex = /^[A-Za-z]+(?:[ _-][A-Za-z]+)*$/
    
    if(!userRegex.test(usr.value)){
      errores += "Debe ingresar un nombre de usuario válido\n";
      avisos = true;
    }
      if(!nombreRegex.test(nombre.value)){
        errores +="Debe ingresar un nombre válido\n";
        avisos = true;
    }
    if(!nombreRegex.test(ape.value)){
      errores +="Debe ingresar un apellido válido\n";
      avisos = true;
    }
      if(avisos){
        alert(errores);
        return false;
      }else{
      alert("El formulario ha sido enviado con éxito.");
      return true;
            }
          }
  
function validarCuenta(){
    var email = document.getElementById('email');
    var pass = document.getElementById('passwd');
    var confirmpass = document.getElementById('confirmpasswd');
    let avisos = false;
    let errores = "";
    let emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let passRegex= /^((?=.*[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~])|(?=.*\d))(?=.*[a-z])(?=.*[A-Z]).{6,}$/

    if(!emailRegex.test(email.value)){
      errores +="Debe ingresar un email válido\n";
      avisos = true;
    }
    if(!passRegex.test(pass.value)){
        errores +="Debe ingresar una contraseña válida";
        avisos = true;
    } 
    if (confirmpass.value != pass.value){
      errores +="Debe ingresar la misma contraseña nuevamente\n"
      avisos = true;
    }
    if(avisos){
      alert(errores);
      return false;
    }else{
        alert("El formulario ha sido enviado con éxito.");
        return true;
        }
    }

function verPreview(){
    var prev = document.getElementById('preview');
    var fuData = document.getElementById('fileChooser');
    var FileUploadPath = fuData.value;

    var Extension = FileUploadPath.substring(
    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//El archivo es una imagen?

    if (Extension == "gif" || Extension == "png" || Extension == "bmp"|| Extension == "jpeg" || Extension == "jpg") {
        if (fuData.files && fuData.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                prev.src= e.target.result;
                prev.style.display = "initial";
            }
            reader.readAsDataURL(fuData.files[0]);
        }

    } 
    else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
}
