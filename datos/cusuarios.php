<?php
require('conexion.php');
$db = new Conexion();
class Usuarios
{
    private $id;
    private $nombre; 
    private $apellido;
    #public function __construct($id, $nombre, $apellido)
    public function __construct()
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    
    public function ConsultarUsuario()
    {
        $query='select nombres, apellidos from usuarios';
        $resultado=$db->query($query);
        $datos = array();
        while ($fila=$resultado->fetch_array()) 
        {
            $datos []= array('nombres' => $fila['nombres'], 'apellidos' => $fila['apellidos']); 
        }
        return $datos;
    }
    
}
?>