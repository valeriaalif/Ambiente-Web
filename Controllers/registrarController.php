<?php
include_once '../Models/registroModel.php';
session_start();

if(isset($_POST["btnRegistrarse"]))
{

$correoelectronico = $_POST["correoelectronico"];


$respuesta = Registro($correoelectronico);



if($respuesta -> num_rows > 0){

$datosRegistro = mysqli_fetch_array($respuesta); //no sea abstracto, lo encapsula en un array con los datos en distintas posiciones.
$_SESSION["ConsecutivoUsuario"] =  $datosUsuario["ConsecutivoUsuario"];
$_SESSION["CorreoElectronico"] =  $datosUsuario["CorreoElectronico"];

    header("Location: ../Views/principal.php");
}
else{
    
header("Location: ../Views/registrarUsuario.php");
}

}
?> 
