<?php
include_once '../Models/usuariosModel.php';


function ConsultarUsuarios()
{

$respuesta = ConsultarUsuariosModel();

if($respuesta -> num_rows > 0){

    while($fila = mysqli_fetch_array($respuesta)) {
        echo "<tr>";
        echo "<td>". $fila["CorreoElectronico"] . "</td>";
        echo "<td>". $fila["DescEstado"] . "</td>";
        echo "<td>". $fila["NombreTipoUsuario"] . "</td>";

        if($_SESSION["TipoUsuario"]==1){
        echo "<td><a href ='../Views/actualizarUsuario.php?q=". $fila["ConsecutivoUsuario"] ."'>Actualizar</a> | <a href=''>Eliminar</a></td>";}
        else
        {
            echo "<td><a href='../Views/actualizarUsuario.php?q=".$fila["ConsecutivoUsuario"]  ."'>Actualizar</a></td>";
        }
        echo "</tr>";
    }
}
}

function ConsultarTiposUsuarios()
{
    $respuesta = ConsultarTiposUsuariosModel();

    if($respuesta -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($respuesta))
        {
            echo "<option value=" . $fila["TipoUsuario"] . "> " . $fila["NombreTipoUsuario"] . "</option>";
        }
    }
}


function ConsultarUsuario($consecutivo)
{
    $respuesta = ConsultarUsuarioModel($consecutivo);
    return mysqli_fetch_array($respuesta);
  

}
if(isset($_POST["BuscarUsuario"])){
    
   $respuesta = BuscarUsuarioModel($_POST["Correo"]);

   if($respuesta -> num_rows > 0)
   {
    echo "El correo ya se encuentra registrado";
   }
   else
   {
    echo "OK";
   }
}

if(isset($_POST["btnRegistrarse"])){
    $correoelectronico = $_POST["correoelectronico"];
    $contrasenna = $_POST["contraseña"];

    $respuesta = RegistrarUsuarioModel($correoelectronico,$contrasenna);

    if($respuesta == true){
        header("Location: ../Views/login.php");
    }
}

if(isset($_POST["btnRecuperar"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $respuesta = BuscarUsuarioModel($correoElectronico);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);
        $cuerpo = "Su contraseña actual es: " . $datosUsuario["Contrasenna"];

        EnviarCorreo($correoElectronico, 'Recuperar Usuario', $cuerpo, null);
        header("Location: ../Views/login.php");
    }
}

if(isset($_POST["btnNotificar"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $nombreAdjunto = "../Files/" . $_FILES["adjunto"]["name"];
    move_uploaded_file($_FILES["adjunto"]["tmp_name"], $nombreAdjunto);

    EnviarCorreo($correoElectronico, 'Practica 2', 'Por favor revise el archivo adjunto', $nombreAdjunto);
    unlink($nombreAdjunto);
}


function EnviarCorreo($destinatario, $asunto, $cuerpo, $nombreAdjunto)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';

    $mail -> IsSMTP();
    $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587; // 465 // 25                               
    $mail -> SMTPAuth = true;
    $mail -> Username = 'vali80232@ufide.ac.cr';               
    $mail -> Password = '...';                                
    
    $mail -> SetFrom('valeriaalif@gmail.com', "Sistema Profesores");
    $mail -> Subject = $asunto;
    $mail -> MsgHTML($cuerpo);   
    $mail -> AddAddress($destinatario, 'Usuario Sistema');
    if($nombreAdjunto != null)
    {
        $mail -> AddAttachment($nombreAdjunto);
    }
    $mail -> send();
}

?>