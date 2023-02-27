<?php
include_once '../Models/loginModel.php';

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(isset($_POST["btnIniciarSesion"]))
{

$correoelectronico = $_POST["correoelectronico"];
$contrasenna = $_POST["contraseña"];

$res = IniciarSesionModel($correoelectronico,$contrasenna);



if($res -> num_rows > 0){

     $datosUsuario = mysqli_fetch_array($res); //no sea abstracto, lo encapsula en un array con los datos en distintas posiciones.
$_SESSION["ConsecutivoUsuario"] =  $datosUsuario["ConsecutivoUsuario"];
$_SESSION["CorreoElectronico"] =  $datosUsuario["CorreoElectronico"];

    header("Location: ../Views/principal.php");
}
else{
    
header("Location: ../Views/login.php");
}

}

if(isset($_POST["btnCerrarSesion"])){
    session_destroy();
    header("Location: ../Views/principal.php");
}
?>