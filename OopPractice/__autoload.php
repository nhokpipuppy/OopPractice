<?php 
// function __autoload($className){
   // require_once('class/'.$class_name.'.php'); 
// }
// function my_autoloader($class_name) {
//    // include('class/'.$class_name.'.php');
//    include 'class/'.$class_name.'.php';
// }

// spl_autoload_register('my_autoloader');
spl_autoload_register(function($className) {
	include_once 'Class/'.$className.'.php';
});
 ?>