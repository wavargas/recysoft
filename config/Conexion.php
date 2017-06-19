<?php namespace config;
use mysqli;
class Conexion
{
    var $host = null;
    var $usuario = null;
    var $password = null;
    var $database = null;
    function __construct($h, $u, $p, $db)
    {
        $this->host = $h;
        $this->usuario = $u;
        $this->password = $p;
        $this->database = $db;
    }

    public function conectar()
    {
        $conexion = new mysqli($this->host, $this->usuario, $this->password, $this->db);
        if($conexion->connect_errno)
        {
            echo "Fallo la conexión: ". $conexion->connect_error . "";
        }else{
            echo "Conectado";
        }
    }
}
?>