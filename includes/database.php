<?php
function autoload($class)
{
	require_once('models/'.$class.'.php');
}

spl_autoload_register('autoload');

?>