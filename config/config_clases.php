<?php namespace config;
	spl_autoload_register(function($clase){
		$ruta = str_replace('\\','/',$clase);
                print $ruta;
                include $ruta.'.php';
	});
?>