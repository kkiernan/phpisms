<?php

/*
|---------------------------------------------------------------------
| Variable Variables
|---------------------------------------------------------------------
|
| Yeah this scares the hell out of me.
|
*/

$foo = 'bar';
$bar = 'baz';
$baz = 'zed';

// Prints 'baz'
echo $$foo . PHP_EOL;

// Prints 'zed'
echo $$$foo;
