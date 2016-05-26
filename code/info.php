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
