<?php namespace config;
use mysqli;
class Conexion
{
    function conectar()
    {
        $conexion = new mysqli("localhost", "root", "", "recysoft");
        if($conexion->connect_errno)
        {
            echo "Fallo la conexión: ". $conexion->connect_error . "";
        }else{
            echo "Conectado";
        }
    }
}
$obj = new Conexion();
$obj->conectar();
?>