<?php

/*
|---------------------------------------------------------------------
| Info and Options
|---------------------------------------------------------------------
|
| Refer to the documentation for an extensive list of functions.
| http://php.net/manual/en/ref.info.php
|
*/

// Prints extension information about the PHP environment,
// compilation options, operating system, etc.
phpinfo();

// Prints an array of loaded extensions.
print_r(get_loaded_extensions());

// Prints information about the OS.
echo php_uname();

// Determines if a specific extension is loaded.
var_dump(extension_loaded('mbstring'));

// Gets the name of the owner of the current script.
echo get_current_user() . PHP_EOL;

// Prints an array of the function names in a module.
print_r(get_extension_funcs('mbstring'));

// Prints an array of constants.
print_r(get_defined_constants());

// Prints the path to the loaded ini file.
echo php_ini_loaded_file();
