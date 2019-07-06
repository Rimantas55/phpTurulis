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
    //if(filer_has_var(INPUT_POST, 'email')) suveikia per submit pan kaip isset
        if (filter_has_var(INPUT_POST, 'email')) {
            if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                echo "Email format is correct";
            } else {
                echo 'Email is NOT valid';
            }
        }
    ?>

    <!-- Email Validation -->
    <form action="index.php" method="POST">
        <input type="email" name="email">
        <button type="submit">Validate Email</button>
    </form>




<script src="script.js"></script>
</body><!--end of body-->
</html><!--end of html-->