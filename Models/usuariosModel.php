<?php
include_once 'conexionModel.php';

function ConsultarUsuariosModel()
{
    $instancia = Open();

    $usuario = $_SESSION["CorreoElectronico"];
    $tipoUsuario = $_SESSION["TipoUsuario"];

    $sentencia = "CALL ConsultarUsuarios('$usuario', $tipoUsuario);";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}

function ConsultarTiposUsuariosModel()
{
    $instancia = Open();


    $sentencia = "CALL ConsultarTiposUsuarios();";
    $respuesta = $instancia->query($sentencia);

    Close($instancia);

    return $respuesta;

}


function ConsultarUsuarioModel($consecutivo)
{
    $instancia = Open();


    $sentencia = "CALL ConsultarUsuario($consecutivo);";
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