<?php 
namespace config;
use mysqli;
class Conexion
{
    protected $conexion;
    public function __construct($h, $u, $p, $db)
    {
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        if($this->conexion->connect_errno)
        {
            echo "Fallo la conexión: ". $this->conexion->connect_error;
            return;
        }else{
            echo "Conectado";
        }
        $this->conexion->set_charset(DB_CHARSET);
    }
}
?>
