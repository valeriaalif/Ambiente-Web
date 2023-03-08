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

function BuscarUsuarioModel($correoElectronico)
{
    $instancia = Open();

    $sentencia = "CALL BuscarUsuario('$correoElectronico');";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}

function RegistrarUsuarioModel($correoElectronico, $contrasenna)
{
    $instancia = Open();
    
    $sentencia = "CALL RegistrarUsuario('$correoElectronico','$contrasenna');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);

    return $respuesta;
}
?>