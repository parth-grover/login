<?php
session_start();
function __autoload($class){
	
	include_once("class/$class.php");
	
}

function class_auto($include_class){
	$admin_header = [];
	foreach($include_class as $class_value =>$value):
		$class_value=new $class_value($value);
		$admin_header[] = $class_value;
	endforeach;
	return $admin_header; 
}

?>