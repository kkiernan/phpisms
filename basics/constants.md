# Constants

Constants are meant for defining immutable values that can be accessed from any scope in a script. Note that constants can **only contain scalar values**, and their names are case-sensitive and follow the same naming requirements as variables with the exception that they do not have a leading $. It is considered best practice to define constants using only uppercase letters. For example:

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
