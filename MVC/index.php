<?php

//Chemin du dosier courent
define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

//Chmin sur le serveur
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require(ROOT.'core/controler.php');
require(ROOT.'core/funcDB.php');

//recuperation des paramatre passer dans url
$param = explode('/', $_GET['p']);
//$param[0] == controler
//$param[2] == action

$controler = $param[0];

//Si l'action exite pas on redirige vers index
if(!isset($param[1])){
	$param[1] = 'index';
}

$action = $param[1];

//appele de la class concerner
require(ROOT.'controlers/'.$controler.'.php');

//initialisation de la classe
$controler = new $controler();


if(method_exists($controler, $action)){
	// $controler->$action();
	unset($param[0]); unset($param[1]);
	call_user_func_array(array($controler, $action), $param);
}
else
	echo 'erreur 404';

?>