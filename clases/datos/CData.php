<?php namespace clases\datos;
use mysqli;
include '../config/config_autoload.php';
include '../config/config.php';
class CData extends mysqli
{
    protected $conexion;
    public function __construct()
    {
        $this->conexion = parent:: __construct(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        if($this->conexion->connect_errno)
        {
            echo "Fallo la conexión: ". $this->conexion->connect_error;
            return;
        }else{
            print_r("Conectado");
        }
        #$this->conexion->set_charset(DB_CHARSET);
    }
    function EjecutarConsulta($query)
    {
        $resultado= $this->query($query);
        if($resultado)
        {
            return $resultado;
        }
    }

    function RecuperarResultados($resultado)
    {
        #$fila=$resultado->fetch_array();
        $fila=$resultado->fetch_assoc();
            #$datos []= array('nombres' => $fila['nombres'], 'apellidos' => $fila['apellidos']); 
        return $fila;
    }

    function LiberarResultado($resultado) {
        mysqli_free_result($resultado);
    }

    function CerrarConexion(){
        $this->close();
        //mysqli_close($this->link);
    }
}
$cone = new CData();
?>