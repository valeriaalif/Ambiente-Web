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
    

    $mail ->AddAttachment("C:\Users\valer\Documents\universidad5\Calidad Software\SC_405_Calidad del Software.pdf");

    $mail -> send();
}

?>