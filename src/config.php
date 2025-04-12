<?php 
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		include('Classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);
	define("PATH", "");
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DBNAME','gamificacao');
?>