<?php 

//nepadaryta duomenu baze

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function connect()
{
    $host = 'localhost';
    $db = 'pdo2';
    $user = 'pdo_user';
    $password = '123petras@123P';


    try {
        $pdo = new PDO("mysql:host=$host; dbname=$db; charset=utf8",
            $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();

    }
    return $pdo;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

function emptyFields($name, $email, $phone, $password,  $password2){
    if(empty($name) || empty($email) || empty($phone) || empty($password) || empty($password2)){
        return true;
    }
    return false;
}
emptyFields($name, $email, $phone, $password,  $password2);


function passwordValidation($password, $password2)
{
    if ($password === $password2) {
        return true;
    }
    return false;
}

passwordValidation($password, $password2);


function userExist($name)
{
    $sql = "SELECT * FROM table1 WHERE name = ? ";
    $stmt = connect()->prepare($sql);
    $stmt->execute([$name]);
    $nameUser = $stmt->fetch();//$name yra arrejusgrazina array

    if($nameUser === false){
        return true;
    }
    return false;
}

userExist($name);


function insertQuery($name, $email, $phone, $password, $password2)
{
    if (!passwordValidation($password, $password2) || !userExist($name) || emptyFields($name, $email, $phone, $password,  $password2) ) { //sauktukas vykdytojas
        return false;
    }


    $sql = "INSERT INTO table1(name, email, phone, password) VALUES(:name, :email, :phone, :password)";
    $stmt = connect()->prepare($sql);
    $stmt->execute([
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "password" => $password,
    ]);
    //print_r($stmt->errorInfo());
}

insertQuery($name, $email, $phone, $password, $password2);

function createUser()
{

}


//$stmt = $pdo->query('SELECT name FROM table1');
//while ($row = $stmt->fetch())
//{
//    echo $row['name'] . "\n";
//}
//
//$sql = "SELECT * FROM table1 WHERE email = ?AND status = ?";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$email, $status]);
//$user = $stmt->fetch();
//
//
//


/*NEPAVYKO*/
/*
function connect()
{
    $host = '127.0.0.1'; //'localhost' kartais yra tas pats kas 127.0.0.1
    $db = 'pdo2';
    $user = 'pdo_user'; //pradzioje buvo root
    $password = '123petras@123P'; //buvo laisvas stringas ""

    try {
        echo "online";
        $pdo = new PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
    } catch (PDOException $e) {
        echo "Connection failed " . $e->getMessage() . "\n";

        return false;
    }

    return $pdo;

}

//GRANT_ALL_PRIVILEGES_ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';??

//echo "<pre>";
$stmt = connect()->query('SELECT * FROM table1'); //reikejo is table1

while ($row = $stmt->fetch()) {
    print_r($row);
    echo "ar cia ka paselektinau";
    echo "</pre>";
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
    return false;
}

function stripTagsFromInput($input)
{
    if (strip_tags($input) === true){

    }
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

*/