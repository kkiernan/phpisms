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

/**
 * Modifies the given array passed by reference.
 *
 * @param array &$array
 *
 * @return null
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

print_r($array); //  Prints "Array([0] => 3, [1] => 4, [2] => 8)"
