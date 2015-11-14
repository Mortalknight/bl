<?php
/*

        Global file includes and configs should be stored here
        
*/
session_start();
//libs
require_once('lib/medoo.php');
//core files
require_once('core/auth.php');


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

$auth = new auth($database);


?>
