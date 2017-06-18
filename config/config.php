<?php namespace config;
include_once 'config_clases.php';
#include('..\datos/CData.php');
define ('SERVIDOR', 'localhost');
define ('USUARIOBD', 'root');
define ('CONTRASENIABD', '');
define ('NOMBREBD', 'RecySoft');
$db = new datos\clases\CData();
$db->Conectar();
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
?>