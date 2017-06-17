<?php
	function autoload($clase)
	{
		includes "clases/".$clase.".php";
	}
	spl_autoload_register('autoload');
?>