<?php namespace datos\clases;
use mysqli;
use config;
class CData
{
    function Conectar()
    {
        $conexion = new mysqli("localhost", "root", "", "recysoft");
        if($conexion->connect_errno)
        {
            echo "Fallo la conexión: ". $conexion->error . "";
        }else{
            echo "Conectado";
        }
    }
    /*
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
    }*/
}
#$cone = new CData();
?>