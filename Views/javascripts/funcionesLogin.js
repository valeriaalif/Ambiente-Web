function HabilitarCampos()
{
  let correo = document.getElementById("correoelectronico").value;
  let clave = document.getElementById("contraseña").value;


if(correo.trim() != "" && clave.trim() != ""){
  document.getElementById("btnIniciarSesion").disabled = false;
}
else{
  document.getElementById("btnIniciarSesion").disabled = true;
}

}