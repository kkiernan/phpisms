<?php

/*
|---------------------------------------------------------------------
| Strings
|---------------------------------------------------------------------
|
| Use single quotes when you do not require variable interpolation.
| Use double quotes when you do require variable interpolation.
|
| Nowodc strings are like single quoted strings, but you do not
| have to escape single quotes and you can span multiple lines.
|
| Heredoc strings are similar to nowdoc strings but also support
| variable interpolation.
|
*/

$name = 'Kelly Kiernan';

echo <<<'EXAMPLE'
This is a nowdoc string.
It cannot do variable interpolation.
It's like a single quoted string.
EXAMPLE;

echo "\n\n";

echo <<<EXAMPLE
This is a heredoc string.
It can do variable interpolation.
Hi, my name is $name
EXAMPLE;

echo "\n\n";

echo <<<"EXAMPLE"
You can also define heredoc strings with double quotes.
EXAMPLE;
