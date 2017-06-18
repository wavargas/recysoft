<?php
namespace datos\clases;
use mysqli;
class CData extends mysqli
{
    var $host = null;
    var $usuario = null;
    var $contrasenia = null;
    var $database = null;
    
    #function __construct($host, $usuario, $contrasenia, $nombrebd)
    function __construct()
    {
        
    }

    function Conectar()
    {
        parent::__construct($this->host,$this->usuario,$this->contrasenia,$this->database);
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die("Imposible conectar con la base de datos.") : $x = "Conectado";
        echo $x;
        unset($x);
    }
    
    /**
    * $query = consulta a ejecutar
    */

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
$cone = new CData('localhost','root','','recysoft');
$cone ->Conectar();
?>