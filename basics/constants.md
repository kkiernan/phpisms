# Constants

- [Introduction](#introduction)
- [Defining Constants](#defining-constants)
- [Checking Constants](#checking-constants)
- [Sources](#sources)

## Introduction

Constants are meant for defining immutable values that can be accessed from any scope in a script. Note that constants can **only contain scalar values**, and their names are case-sensitive and follow the same naming requirements as variables with the exception that they do not have a leading $. It is considered best practice to define constants using only uppercase letters.

## Defining Constants

```php
// Output: 1
define('DEBUG', true);
echo DEBUG;
```

Staring with PHP 5.3 you can use the `const` keyword to define constants:

```php
// Output: smtp
const MAIL_DRIVER = 'smtp';
echo MAIL_DRIVER;
```

Starting with PHP 5.6 you can use scalar expressions to define the constant. Valid expressions include math, bitwise math, boolean logic, concatenation, ternary and comparisons.

```php
// Output: Kelly Kiernan
const FIRST_NAME = 'Kelly';
const LAST_NAME = 'Kiernan';
const FULL_NAME = FIRST_NAME . ' ' . LAST_NAME;
echo FULL_NAME;
```

## Checking Constants

You can use the `defined` function to check if a constant with a particular name exists. Attempting to use a constant that has not been defined will result in a notice.

```php
const DEBUG = true;
var_dump(defined('DEBUG')); // Output: bool(true)
var_dump(defined('NOT_A_CONSTANT')); // Output: bool(false)
```

```php
const DEBUG = true;

if (DEBUG) {
    // Code here would run because DEBUG is defined and true
}

if (NOT_DEFINED) {
    // Results in PHP Notice: Use of undefined constant
}
```

## Sources

- [PHP Manual](http://php.net/manual/en/function.defined.php)
- [Zend PHP 5 Certification Study Guide, 3rd Edition](https://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/)
