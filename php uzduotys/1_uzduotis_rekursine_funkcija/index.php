<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>testavimas</title>
</head>
<body>
<?php

////rekursivine funkcija
$numbersArray = [1, 3, 4 , 5, [5,7,[4,6,3]], 8, [4,6]];
$numbersArray2 = [1, 3 , 4];

function sumArrayNumbers($array){
    $sum = 0;
    foreach($array as $element){
        if(is_array($element)){
            $sum = $sum + sumArrayNumbers($element);
        } else {
            $sum = $sum + $element;
        }
    }
    return $sum ;
}

echo sumArrayNumbers($numbersArray) . " Suma";//iskveciam sukurta funkcija
echo "<br>";
echo sumArrayNumbers($numbersArray2);


//parasyti rekursivine  funkcija kuri turi 2 arejus, isrinkti tik lyginius skaicius
$skaiciai = [1, 2, 32, 8, [12, 3, 10]];

function get_equal($numbersArray)
{//parametras $numbersArray perduoda areju $skaiciai
    foreach ($numbersArray as $element) {//$element tai tie skaiciai values is arejaus $skaiciai
        if (is_array($element)) {
            echo get_equal($element) . " "; //funkcija kuri iskviecia pati save
        } else {
            if ($element % 2 == 0) {
                echo $element . " ";
            }
        }
    }
}

get_equal($skaiciai);

//////////////////////////////////////////////////
$numbersArray = [1, 3, 4, 5, [5, 7, [4, 6, 3]], 8, [4, 6]];
$numbersArray2 = [1, 3, 4, 2, 6];

function getEvenNumbers($element)
{//perduodam parametra
    $newEvenNumbersArray = [];
    if (is_array($element)) {
        foreach ($element as $value) {
            $newEvenNumbersArray = array_merge(getEvenNumbers($value), $newEvenNumbersArray);
        }
    } else {
        if ($element % 2 == 0) {
            $newEvenNumbersArray[] = $element;
        }
    }
    return $newEvenNumbersArray;
}

echo '<pre>';
print_r(getEvenNumbers($numbersArray));


?>


</body>
</html>