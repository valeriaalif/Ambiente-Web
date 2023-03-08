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
        echo "</tr>";
    }

   
}
else{
    
echo "No hay datos";
}
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
    $correoElectronico = $_POST["correoelectronico"];
    $respuesta = BuscarUsuarioModel($correoElectronico);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);
        $cuerpo = "Su contraseña actual es: " . $datosUsuario["Contraseña"];

        EnviarCorreo($correoElectronico, 'Recuperar Usuario', $cuerpo);
        header("Location: ../Views/login.php");
    }
}

function EnviarCorreo($destinatario, $asunto, $cuerpo)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';

    $mail -> IsSMTP();
    $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587; // 465 // 25                               
    $mail -> SMTPAuth = true;
    $mail -> Username = 'vali80232@ufide.ac.cr';               
    $mail -> Password = '...';                                
    
    $mail -> SetFrom('vali80232@ufide.ac.cr', "Sistema Profesores");
    $mail -> Subject = $asunto;
    $mail -> MsgHTML($cuerpo);   
    $mail -> AddAddress($destinatario, 'Usuario Sistema');
    $mail ->AddAttachment("C:\Users\valer\Documents\universidad5\Calidad Software\SC_405_Calidad del Software.pdf");

    $mail -> send();
}
?>