<?php
include ('config/config_clases.php');
#use Pruebas;
/*include('./includes/comunes.php');

$templates = new RecySoft();
$templates->assign(array('variable'=>'Hola, todo bien',
	'variable2'=>'Esto es variable2'));
$templates->display('public/index.tpl');
*/
//include('./datos/CData.php');
$obj = new Pruebas\CPrueba();
$obj->Escribir('Wilmer');
?>
