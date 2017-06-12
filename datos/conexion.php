<?php
require('./config/config.php');
class Conexion extends mysqli
{
    public function __construct()
    {
        parent::__construct(servidor,userdb,passdb,nombrebd);
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die("Imposible conectar con la base de datos") : $x = "Conectado";
        //echo $x;
        unset($x);
    }
}
/** 
 * Probando conexión con la base de datos.
 * $db = new Conexion();
 */
?>