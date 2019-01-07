<?php 
spl_autoload_register(function($className) {
	include_once 'application/'.$className.'.php';
});
 ?>