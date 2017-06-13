<?php
require('./datos/conexion.php');
/*include('./includes/comunes.php');

$templates = new RecySoft();
$templates->assign(array('variable'=>'Hola, todo bien',
	'variable2'=>'Esto es variable2'));
$templates->display('public/index.tpl');
*/
        $db = new Conexion();
        $query='select nombres, apellidos from usuarios';
        $resultado=$db->query($query);
        $datos = array();
        while ($fila=$resultado->fetch_array()) 
        {
            $datos []= array('nombres' => $fila['nombres'], 'apellidos' => $fila['apellidos']); 
        }

        echo('<pre>');
            var_dump($datos);
        echo('</pre>');
        foreach ($datos as $f => $valor) {            
            echo $valor['nombres'], ' ', $valor['apellidos'], '<br>';
        }
        //print_r($pila);
        #foreach ($resultados as $value=>$v) {
        #    echo $resultados[$value], '<br>';
        #}
?>
