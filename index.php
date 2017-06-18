<?php
/*include('./includes/comunes.php');

$templates = new RecySoft();
$templates->assign(array('variable'=>'Hola, todo bien',
	'variable2'=>'Esto es variable2'));
$templates->display('public/index.tpl');
*/
//include('./datos/CData.php');
spl_autoload_register();
$datos = new datos\clases\CData();
      foreach ($datos as $f => $valor) {            
            echo $valor['nombres'], ' ', $valor['apellidos'], '<br>';
        }
        //print_r($pila);
        #foreach ($resultados as $value=>$v) {
        #    echo $resultados[$value], '<br>';
        #}
?>
