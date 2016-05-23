<?php

/*
|---------------------------------------------------------------------
| Strings
|---------------------------------------------------------------------
*/

// Use single quotes when you do not require variable interpolation.
$name = 'Kelly Kiernan';

// Use double quotes when you require variable interpolation or are
// using special escaped characters.
echo "My name is $name." . PHP_EOL;

// Nowodc strings are like single quoted strings, but you do not
// have to escape single quotes and you can span multiple lines.
echo <<<'EXAMPLE'
This is a nowdoc string.
It cannot do variable interpolation.
It's like a single quoted string.
EXAMPLE;

echo PHP_EOL;

// Heredoc strings are similar to nowdoc strings but support variable 
// interpolation like double quoted strings.
echo <<<EXAMPLE
This is a heredoc string.
It can do variable interpolation.
Hi, my name is $name
EXAMPLE;

echo PHP_EOL;

echo <<<"EXAMPLE"
You can also define heredoc strings with this double quote syntax.
EXAMPLE;

echo PHP_EOL;

// There are two syntaxes for variable parsing: simple and complex. With the 
// simple syntax, the parser greedily takes as many tokens as possible after 
// encountering a dollar sign.
echo "My name is $name." . PHP_EOL;

// The simple syntax works with array indexes and object properties too.
$names = ['Kelly', 'Jim'];

echo "His name is $names[1]." . PHP_EOL;

// The complex syntax allows the use of more complex expressions. For example, 
// quoted array keys only work with the complex syntax.
$john = ['name' => 'John', 'age' => 25];

echo "{$john['name']} is {$john['age']} years old." . PHP_EOL;

// Or you might need to tag something onto the end of a variable.
echo "Your username is {$name}154." . PHP_EOL;
