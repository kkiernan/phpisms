<?php

/*
|---------------------------------------------------------------------
| Variadics
|---------------------------------------------------------------------
|
| Variadics were introduced in PHP 5.6, and they allow you to
| explicitly denote that a function accepts a varying number
| of arguments. Note that the variadic argument must be the
| last one in the argument list.
|
*/

/**
 * Calculates the sum of the given numbers.
 *
 * @param array $nums
 *
 * @return integer
 */
function sum(...$nums)
{
    $sum = 0;

    foreach ($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo sum(1, 2, 8, 10) . "\n"; // prints "21"

/**
 * Takes a variable-length list of arrays by reference and transforms
 * them into the product of their first and second items multiplied.
 *
 * @param array $rectangles
 */
function mapDimensionsToAreas(array &...$rectangles)
{
    foreach ($rectangles as &$rectangle) {
        $rectangle = $rectangle[0] * $rectangle[1];
    }
}

$smallSquare = [2, 2];
$bigSquare = [125, 125];
$rectangle = [5, 10];

mapDimensionsToAreas($smallSquare, $bigSquare, $rectangle);

echo $smallSquare . "\n"; // prints "4"
echo $bigSquare . "\n"; // prints "15625"
echo $rectangle; // prints "50"
