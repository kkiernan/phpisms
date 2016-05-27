<?php

/*
|---------------------------------------------------------------------
| Oddball Examples
|---------------------------------------------------------------------
|
| The following are some trickier example I've come across while
| studying for the Zend exam. These ideas come from various
| study guides and PHP tutorial sites.
|
*/

/*
|---------------------------------------------------------------------
| Print Madness
|---------------------------------------------------------------------
*/

// Prints 51. Interesting right? First the print construct is run,
// which prints 5 to the screen. The print construct returns 1,
// which is then printed to the screen by the echo construct.
echo print '5';
echo PHP_EOL;

// Prints 214. Follows the same logic as the previous example.
echo '1' . (print '2') + 3;
echo PHP_EOL;

// Prints 8121
echo '5' + '7' . print 8;
echo PHP_EOL;

// Prints 8591
echo '9'. print 4 + print 8;
echo PHP_EOL;

// Prints 3foo61
echo '6' . print 3 . 'foo';
echo PHP_EOL;

// Prints 361foo
echo('6' . print 3) . 'foo';
echo PHP_EOL;

/*
|---------------------------------------------------------------------
| Switch Weirdness
|---------------------------------------------------------------------
|
| Apparently it doesn't matter where the default case is placed.
| Why anyone would actually do this is beyond me. The following
| example works fine and prints 'foo detected'.
|
*/

$x = 'foo';

switch ($x) {
    case 'bar':
        echo 'bar detected' . PHP_EOL;
        break;
    
    default:
        echo 'default' . PHP_EOL;
        break;

    case 'foo':
        echo 'foo detected' . PHP_EOL;
        break;
}

/*
|---------------------------------------------------------------------
| Echo Stuff
|---------------------------------------------------------------------
|
| Don't forget that echo does not return a value, while print
| returns 1. Also, echo can take multiple parameters.
|
*/

// Prints 'foobar1'
echo 'foo', 'bar', 1 . PHP_EOL;

// Prints 'testing' and returns 1.
$result = print 'testing' . PHP_EOL;

// Prints int(1)
var_dump($result);
