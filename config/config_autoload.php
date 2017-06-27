<?php 
 #define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
spl_autoload_register(
        function($clase)
        {
        $ruta = str_replace('\\',DS,$clase).'.php';
        print '<pre>'.$ruta.'</pre>';
        include ($ruta);
        }
                    );

?>