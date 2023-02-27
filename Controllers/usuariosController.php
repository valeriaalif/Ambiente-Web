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
?>