<?php
include_once 'conexionModel.php';

function ConsultarUsuariosModel()
{
    $instancia = Open();

    $sentencia = "CALL ConsultarUsuarios();";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}

function BuscarUsuarioModel($correoelectronico)
{
    $instancia = Open();

    $sentencia = "CALL BuscarUsuario('$correoelectronico');";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}

function RegistrarUsuarioModel($correoelectronico, $contrasenna)
{
    $instancia = Open();
    
    $sentencia = "CALL RegistrarUsuario('$correoElectronico','$contrasenna');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);

    return $respuesta;
}
?>