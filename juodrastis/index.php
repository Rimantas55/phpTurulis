<?php include "functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Your title</title>
    <!--Font Awesome-->

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--CSS normalizer-->
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <!--Main CSS style sheet-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head><!--end of head-->

<body>

    <?php 

/*$host = 'localhost';
$userName = 'root';
$dbname = 'userDbName';
$password = '';
$charset = 'utf-8';

try {
    $dsn = "mysql:host = $host; dbname = $dbname; charset = $charset";
    $pdo = new PDO($dsn, $userName, $password);
    $pdo->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch(PDOException $e) {
    echo 'Connetion failed ' . $e->getMessage();
}*/


$emptyArray = [];
$emptyArray[] = 'Lukas';
array_push($emptyArray, "New name Tomas");
print_r($emptyArray); 


?>

<script src="script.js"></script>
</body><!--end of body-->
</html><!--end of html-->