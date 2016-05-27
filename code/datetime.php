<?php

/*
|---------------------------------------------------------------------
| Working with Dates and Times
|---------------------------------------------------------------------
*/

// The DateTime class was introduced in PHP 5.2, and its use
// is preferred over older functions like date(), mktime(),
// strtotime() and time().
$now = new DateTime();

// Prints object information, which is a date string,
// timezone_type int, and timezone string.
var_dump($now);

// The constructor acts like strtotime, so you can pass in most
// values that PHP can figure out how to parse.
$tomorrow = new DateTime('+1 day');

// Retrieve the date using the format method.
echo $tomorrow->format('Y-m-d') . PHP_EOL;

// You can pass in the same values that the older date()
// function acccepts, and there are also a number of
// helpful constants that represent common formats.
// See the docs for more of the constants.
echo $tomorrow->format(DATETIME::RSS) . PHP_EOL;
echo $tomorrow->format(DATETIME::RFC822) . PHP_EOL;
echo $tomorrow->format(DATETIME::COOKIE) . PHP_EOL;
echo $tomorrow->format(DATETIME::ATOM) . PHP_EOL;

// Lets say we know our crazy client gave us a bunch of dates
// in a yy/mm/dd format. Well, this is ambiguous for PHP.
// How does it know which is the month, day, or year?
$ambigousDate = '10/11/12';

// The DateTime class can handle these kinds of
// formats with the createFromFormat() method.
$date = DateTime::createFromFormat('y/m/d', $ambigousDate);

// Prints November 12, 2010
echo $date->format('F j, Y');
