<?php 
namespace config;
include 'config/config_autoload.php';
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'recysoft');
define('DB_CHARSET', 'utf8');

/*
$query='select * from usuarios';
$resultado = $db->EjecutarConsulta($query);
echo '<pre>', print_r($resultado), '</pre>';
echo 'Resultados :','<br>';
if($resultado)
{  while($fila=$db->RecuperarResultados($resultado))
	{
	#echo '<pre>', $fila['nombres'], " ", $fila['apellidos'], '</pre>';
	echo '<pre>', print_r($fila), '</pre>';
	}
}
$db->LiberarResultado($resultado);
$db->CerrarConexion();
 * 
 */
?>