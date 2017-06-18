<?php namespace config;
	spl_autoload_register(function($clase){
            print '<pre>'.$clase.'</pre>';
		$ruta = str_replace('\\','/',$clase);
                print '<pre>'.$ruta.'</pre>';
                include ($ruta.'.php');
	});
?>