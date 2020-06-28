function like(id) {
<<<<<<< HEAD

=======
>>>>>>> 193b6bd1ac86af9a15367b710417c1b73451fc5b
    if(id.classList.toString().indexOf("fa-heart-o") != -1){
        // reducir contador y cambiamos color
        id.nextElementSibling.innerHTML = Number(id.nextElementSibling.innerHTML) + 1;
        id.style.color="#2dbc4e";
    }
    else {
        // aumentamos contador y cambiamos color
        id.nextElementSibling.innerHTML = Number(id.nextElementSibling.innerHTML) - 1;
        id.style.color="#505250";
    }

    // cambiamos de icono
    id.classList.toggle("fa-heart-o");

  }

<<<<<<< HEAD
  
=======
  function estado(id) {
    window.alert("SADASDASD");
    if(id.classList.toString().indexOf("fa-heart-o") != -1){
        // reducir contador y cambiamos color
        id.nextElementSibling.innerHTML = Number(id.nextElementSibling.innerHTML) + 1;
        id.style.color="#2dbc4e";
    }
    else {
        // aumentamos contador y cambiamos color
        id.nextElementSibling.innerHTML = Number(id.nextElementSibling.innerHTML) - 1;
        id.style.color="#505250";
    }

    // cambiamos de icono
    id.classList.toggle("fa-heart-o");

  }
>>>>>>> 193b6bd1ac86af9a15367b710417c1b73451fc5b
//   id.style.color="#2dbc4e";