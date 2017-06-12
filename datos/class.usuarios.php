<?php
require('conexion.php');
$db = new Conexion();
class Usuario
{
    private $id;
    private $nombre; 
    private $apellido;
    public function __construct($id, $nombre, $apellido)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    
    public function ConsultarUsuario()
    {
        /*$query='select nombres, apellidos from usuarios';
        $resultado=$db->query($query);
        #$row=$db->mysql_fetch_array($resultado);
        foreach ( $resultado as $fila )
        {
            printf("'%s'@'%s'\n", $fila['nombres'], $fila['apellidos']);
        }*/
    }
}
?>