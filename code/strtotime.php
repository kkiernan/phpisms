<?php

/*
|---------------------------------------------------------------------
| strtotime
|---------------------------------------------------------------------
|
| From the PHP Manual:
|
| The valid range of a timestamp is typically from Fri, 13 Dec 1901
| 20:45:54 UTC to Tue, 19 Jan 2038 03:14:07 UTC. (These are the
| dates that correspond to the minimum and maximum values for
| a 32-bit signed integer.)
|
| For 64-bit versions of PHP, the valid range of a timestamp is
| effectively infinite, as 64 bits can represent approximately
| 293 billion years in either direction.
|
| Prior to PHP 5.1.0, not all platforms support negative
| timestamps, therefore your date range may be limited
| to no earlier than the Unix epoch. This means that
| e.g. dates prior to Jan 1, 1970 will not work on
| Windows, some Linux distributions, and a few
| other operating systems.
|
| Also in PHP < 5.1 -1 was returned on failure instead of false.
|
*/

// This works as expected.
var_dump(strtotime('January 1, 1998'));

// Prints bool(false)
var_dump(strtotime('January 1, 1901'));

// Prints bool(false)
var_dump(strtotime('January 1, 2039'));

// Negative timestamp may not work on some systems.
var_dump(strtotime('January 1, 1965'));
