<?php
//debuginimui geras code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost'; //$serverName
$dbname = 'loginapp';
$user = 'root'; //$userName
$password = ''; //pass galima pasikeisti per msq Previleges-> Change password

//Set DSN

//$dsn = 'mysql:host='.$host.';dbname='.$dbname; //kitas uzrasymo budas
$dsn = "mysql:host=$host; dbname=$dbname";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //jei sita setAttribute() naudosim, galima resyti fetch()) rasant while ir nennaudoti fetch(PDO::FETCH_OBJ)) pvz:

if ($pdo) {
	echo 'Connection working';
}

