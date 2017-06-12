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
        while ( $fila=$resultado->fetch_array())
        {
            array_push($datos, 
            ["nombres"=> $fila['nombres']], 
            ["apellidos"=> $fila['apellidos']]
            );
        }
        echo '<br>Resultados: ';
        print_r($datos);
        echo '<br>';
        //print_r($total) ;
        echo('<pre>');
            var_dump($datos);
        echo('</pre>');
        foreach ($datos as $f => $valor) {
            foreach ($datos as $f2 => $valor2){
                echo $valor2;
            }
        }
        echo '<br>';
        $pila = array("naranja", "plátano");
        array_push($pila, "manzana", "arándano");
        //print_r($pila);
        #foreach ($resultados as $value=>$v) {
        #    echo $resultados[$value], '<br>';
        #}
?>
