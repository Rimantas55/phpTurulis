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
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //jei sita setAttribute() naudosim, tai kai rasysim while ten galima resyti fetch()) ir nenaudoti fetch(PDO::FETCH_OBJ)) pvz:
//while($row = $stmt->fetch()){ //nenaudojam FETCH_OBJ bus israiska //$row->title
	//echo $row->title . '<br>';
//}

// if ($pdo) {
// 	echo 'Connection working';
// }

#PDO QUERY
$stmt = $pdo->query('SELECT * FROM posts'); //$stmt is like $statement
#First Method using fetch(PDO::FETCH_ASSOC)
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //while naudojam kai norim visa info outputinti is lenteles stulpelio
	echo $row['author'] . '<br>';
}

//output
// Post one 1
// Post two 2
// Post three 3
// Post four 4
// Post fifth 5
// Post six 6
