let email = document.getElementById("correoelectronico").value;
let pswd = document.getElementById("contrasenna").value;
let confirm = document.getElementById("confirmarcontrasenna").value;



function ValidarPswd(){

  if(confirm != pswd ){
    alert("Las contraseñas no son iguales");
      document.getElementById("btnRegistrarse").disabled = true;
  }
  else{
    document.getElementById("btnRegistrarse").disabled = false;
  }

}