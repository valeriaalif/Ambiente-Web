
<?php

function Open()
{
$servidor = "localhost:3308";
$usuario = "root";
$contrasenna = "";
$baseDatos = "proyectomn_bd";
 
return mysqli_connect($servidor, $usuario, $contrasenna, $baseDatos);

}

function Close($instancia)
{

    mysqli_close($instancia);
}
?>
