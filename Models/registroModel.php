<?php
include_once 'conexionModel.php';

function Registro ($correoelectronico,$contrasenna)
{
    $instancia = Open();

    $procedimiento = "CALL Registro('$correoelectronico','$contrasenna');";
    $respuesta = $instancia->query($procedimiento);

    Close($instancia);

    return $respuesta;

}
?>