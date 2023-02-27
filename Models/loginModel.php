<?php
include_once 'conexionModel.php';

function IniciarSesionModel($correoelectronico,$contrasenna)
{
    $instancia = Open();

    $sentencia = "CALL IniciarSesion('$correoelectronico','$contrasenna');";
    $res = $instancia->query($sentencia);

    Close($instancia);

    return $res;

}
?>