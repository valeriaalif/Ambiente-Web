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
?>