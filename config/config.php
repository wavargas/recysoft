<?php
#include('..\datos/CData.php');
spl_autoload_register();
define ('SERVIDOR', 'localhost');
define ('USUARIOBD', 'root');
define ('CONTRASENIABD', '');
define ('NOMBREBD', 'RecySoft');

$db = new Datos\Clases\CData(SERVIDOR, USUARIOBD, CONTRASENIABD, NOMBREBD);
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