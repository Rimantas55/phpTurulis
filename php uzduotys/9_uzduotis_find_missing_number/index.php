<?php

/*Find missing number*/

$array = [1,2,3,4,6,7,8,9];
function findMissingNumber($array)
{
    for ($i = 1; $i <= count($array) + 1; $i++) {
        if (!in_array($i, $array)) {
            return $i;
        }
    }
}

echo findMissingNumber($array);