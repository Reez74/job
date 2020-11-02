<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once 'php/db.php';
require_once 'php/system.php';
spl_autoload_register (function($class){
	require_once 'php/classes/'.$class.'.php';
});
?>