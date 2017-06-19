<?php 
namespace config;

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'recysoft');

$obj = new Conexion(HOST, USER, PASS, DB);
$obj->conectar();

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