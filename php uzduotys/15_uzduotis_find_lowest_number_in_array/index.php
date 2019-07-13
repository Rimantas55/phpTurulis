<?php

$someArray = [5, 6, 4, 10,19, 2,15,20, -15, -2];


echo min($someArray);

function findMin($someArray){
    $min = 9999; //5 //$someArray[0]
    $min2 = $min; //5

    foreach($someArray as $x) { //5 //6 //x = 4
        if ($x < $min) { //5 < 5 // 6 < 5// 4 < 5
            $min2 = $min; //5
            $min = $x;// 4
        } elseif ($x < $min2){
                $min2 = $x;
        }
    }
    return $min . $min2;
}

echo findMin($someArray) . " " . '<br>';


