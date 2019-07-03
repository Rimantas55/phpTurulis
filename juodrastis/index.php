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

//hasshing password
/*echo "test123";
echo "<br>";
echo "Click restart and you will see that password changes <br>";
echo password_hash("test123", PASSWORD_DEFAULT);
echo "<br>";

//checking if entering user password matching with password hashed in db
$input = "test123"; //this this password user trys to log in
$hashedPasswordInDatabase = password_hash("test123", PASSWORD_DEFAULT);
echo password_verify($input, $hashedPasswordInDatabase) . " if password correct returns 1";
echo "<br>";
*/

?>

<form action="index.php" method="POST">
    <input type="password" name="password" autofocus="">
    <button type="submit" name="submit">Submit</button>
</form>

<?php 

if (isset($_POST['submit'])) {
    echo $_POST['password']; //passwordas kuris ivedamas ir bus saugomas
    echo "<br>";
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //incriptinamas passwordas
    echo $password;
    echo "<br>";
    if ($_POST['password'] == password_verify($_POST['password'], $password)){ //jei useris iveda teisinga passworda sutikrina su hasintu passwordu duomenu bazeje
     echo "all right";
 }   
}





?>

<script src="script.js"></script>
</body><!--end of body-->
</html><!--end of html-->