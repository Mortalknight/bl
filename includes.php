<?php
//include libs
require_once('lib/medoo.php');


//configs

$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'bl',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
 
	// [optional]
	'port' => 3306
]);


?>
