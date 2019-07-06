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
    //Validation per arrays
    /*
    filter_var();
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_EMAIL - do not accept not latin letters, kirilica will be not validate despite email strucke is correct
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_REGEXP
    FILTER_VALIDATE_URL

    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_ENCODED
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTER_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_STRING - eliminates hmtl tags ect <h1> and so on
    FILTER_SANITIZE_URL
    */

    $filters = [
        'email' => FILTER_VALIDATE_EMAIL,
        'someText' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 5,
            ]
        ]
    ];
        
    print_r(filter_input_array(INPUT_POST,$filters));
        
    ?>

    <!-- Validiation -->
    <form action="index.php" method="POST">
        <input type="email" name="email">
        <input type="text" name="someText">
        <button type="submit">Submit</button>
    </form>




<script src="script.js"></script>
</body><!--end of body-->
</html><!--end of html-->