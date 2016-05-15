<?php

/*
|---------------------------------------------------------------------
| Pass by Reference
|---------------------------------------------------------------------
|
| Notice how we include the ampersand in both the function parameter
| definition and the foreach loop to indicate that we want a
| reference to the array and array item instead of copies.
|
*/

function modifyArray(&$array)
{
    foreach ($array as &$value) {
        $value = $value + 2;
    }

    $value = $value + 3;
}

$array = [1, 2, 3];

modifyArray($array);

//  Will print Array([0] => 3, [1] => 4, [2] => 8)
print_r($array);
