<?php

/*
|---------------------------------------------------------------------
| Variable-Length Argument Lists
|---------------------------------------------------------------------
|
| PHP functions can accept variable-length argument lists, and the
| func_num_args(), func_get_arg() and fun_get_args() functions
| are used to handle this feature. Also see the variadics.php
| file for examples of features introduced in PHP 5.6.
|
*/

/**
 * Prints the number of arguments passed into the function. Note that
 * we are still able to declare parameters in the function header if
 * we wish, but this is not required and does not affect the
 * behavior of func_num_args().
 *
 * @param $foo mixed
 */
function printNumberOfArgs($foo)
{
    echo func_num_args() . "\n";
}

printNumberOfArgs(1, 'testing', 15, 'hello'); // prints "4"
printNumberOfArgs(1, 15); // prints "2"

/**
 * Prints the second argument passed into the function. Note that
 * if not enough arguments are passed, PHP will issue a warning,
 * so check first that there are at least two arguments.
 */
function printSecondArgument()
{
    if (func_num_args() < 2) {
        return;
    }

    echo func_get_arg(1) . "\n";
}

printSecondArgument('hello', 'world', 16); // prints "world"
printSecondArgument('hello'); // does nothing

/**
 * Prints an array of all arguments passed into the function.
 */
function printAllArgs()
{
    print_r(func_get_args());
}

printAllArgs('hanna', 155, 57, 'john', 'kelly'); // Prints "Array([0] => hanna[1] => 155[2] => 57[3] => john[4] => kelly)"
