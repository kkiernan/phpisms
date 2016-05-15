<?php

/*
|---------------------------------------------------------------------
| CLI
|---------------------------------------------------------------------
|
| When running on the command line, the $_SERVER global will contain
| any command line arguments passed to the script.
|
*/

// Server and execution environment information is stored in $_SERVER.
print_r($_SERVER);

// 'argv' is an array of arguments passed to the script.
print_r($_SERVER['argv']);

// The first argument is always the script name.
echo $_SERVER['argv'][0] . "\n";

// $argv is a predefined variable that you can also use.
print_r($argv);
