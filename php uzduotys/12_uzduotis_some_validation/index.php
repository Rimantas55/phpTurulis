<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Mano serveris';
?>


<form action="index.php" method="post">
	<h1>Mano Forma</h1>
	<input type="text" placeholder="Enter Name" name="name" >
	<input type="text" placeholder="Email " name="email">
	<input type="text" placeholder="Phone" name="phone">
	<input type="password" placeholder="Password" name="password">
	<input type="password" placeholder="Repeat Password" name="password2">
	<input type="Submit" name="submit">
</form>


<hr>


<?php
//Neveikia nes neprijungta prie serverio




function connect()
{
    $host = '127.0.0.1'; //'localhost' kartais yra tas pats kas 127.0.0.1
    $db = 'pdo2';
    $user = 'pdo_user'; //pradzioje buvo root
    $password = '123petras@123P'; //buvo laisvas stringas ""

    try {
        //echo "online";
    	$pdo = new PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
    } catch (PDOException $e) {
    	echo "Connection failed " . $e->getMessage() . "\n";
    	return false;
    }
    return $pdo;
}




$stmt = connect()->query('SELECT * FROM table1'); //reikejo is table1

while ($row = $stmt->fetch()) {

}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password2 = $_POST['password2'];



function submitUser($name, $email, $phone, $pass, $pass2)
{
	if (!passwordMatch($pass, $pass2) && !validationEmpty($name, $email, $phone, $pass, $pass2) && emailUnic($email)) {

		createUser($name, $email, $phone, $pass);
	}

}

submitUser($name, validEmail($email), $phone, $password, $password2 );

function passwordMatch($password, $password2)
{
	if ($password !== $password2) {
		return true;
	}
	return false;
}

function validEmail($email)
{
	$lowerCaseEmail = strtolower($email);

	return $lowerCaseEmail;
}

//$emailValidationSmall =  validEmail($email);


function emailUnic($email)
{
    $stmt = connect()->query("SELECT * FROM table1 WHERE email =  '$email' "); //reikejo is table1
    if ($email === $stmt) {
    	return true;
    }
    //return false;
}

function stripTagsFromInput($input)
{
	if (strip_tags($input) === true)
		return false;
}


function createUser($name, $email, $phone, $password)
{
	$sql = "INSERT INTO table1(name, email, phone, password) VALUES (:name, :email, :phone, :password)";
    $stmt = connect()->prepare($sql);//connect yra funkcija kuri apjungia $pdo
    $stmt->execute([
    	'name' => $name,
    	'email' => $email,
    	'phone' => $phone,
    	'password' => $password,
    ]);
}

function validationEmpty($name, $email, $phone, $pass, $pass2)
{
	if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($pass2)) {
		return true;
	}
	return false;
}


print_r($stmt->errorInfo());