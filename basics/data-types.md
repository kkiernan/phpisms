# Data Types

- [Scalar Types](#scalar-types)
    - [Numeric Values](#numeric-values)
    - [Strings](#strings)
    - [Booleans](#booleans)
- [Compound Data Types](#compound-data-types)
- [Other Data Types](#other-data-types)
- [Gotchas](#gotchas)
- [Sources](#sources)

## Scalar Types

PHP supports many data types, which are generally divided into two categories: scalar and composite. PHP supports four scalar types, which can hold only one value at a time.

Data Type | Description
--------- | -----------
boolean   | Value can be either `true` or `false` 
int       | A signed numeric integer value
float     | A signed floating-point value
string    | A collection of binary data

### Numeric Values

PHP recognizes integers and floating-point values. Integers can be declared using the following notations. Note that all non-decimal numbers are converted to decimal when output using `echo` or `print`.

Notation    | Example   | Description
--------    | --------- | -----------
Decimal     | 115       | Standard decimal notation. Note that no thousands separator is permitted.
Octal       | 0163      | Octal notification identified by its leading zero. Used mainly to express UNIX-style access permissions.
Hexadecimal | 0x73      | Base-16 notation. Hexadecimal digits and leading 0x prefix are case-insensitive.
Binary      | 0b1110011 | Base-2 notation. The zero is followed by a case-insensitive B.

```php
// All examples output: 115
echo 115;
echo 0163;
echo 0x73;
echo 0b1110011;
```

Floating point numbers, also called floats or doubles, are numbers with a fractional component. Floats are signed (can be positive or negative) like integers, and they can be expressed using the following notations.

Notation    | Example     | Description
--------    | ----------- | -----------
Decimal     | 0.12, -10.5 | Traditional decimal notation.
Exponential | 2E7, 1.2e2  | Exponential notation. The letter E is case-insensitive. Example: 1e2 equals 100. This reads 1 times 10 to the power of two.

### Strings

Strings are ordered collections of binary data; this could be text, but could also be the contents of an image file, audio recording, etc.

### Booleans

A boolean can be either `true` or `false`. Consider the following special rules when converting data to and from a boolean:

- A number converts to false only if it is zero.
- A string converts to false only if it is empty or contains only a single 0 character.
- When converted to a number or string, a boolean becomes 1 if it is true, 0 otherwise.

## Compound Data Types

In addition to scalar types, PHP provides compound data types including arrays and objects. These are referred to as compound data types because they are essentially containers of other data.

- Arrays are containers of ordered data.
- Objects are containers of both data and code.

## Other Data Types

There are a few additional data types that PHP provides.

- NULL indicates that a variable has no value.
- The resource data type indicates external resources not natively used by PHP.

## Gotchas

- The precision and range of numbers varies depending on the platform. For example, 64-bit platforms may be capable of representing a wider range of integers than 32-bit platforms depending on how PHP was compiled.
- PHP doesn't track overflows, which can have major consequences when performing something simple like addition.
- The float data type may not represent numbers the way you would expect, for example:

```php
/*
| Output: 7
|
| This is likely unexpected. The float data type represents the result of
| 0.1 + 0.7 as 7.999999 instead of 8. The cast to integer chops off the
| remainder, leaving you with 7.
*/

echo (int) ((0.1 + 0.7) * 10);

/*
| Output: 8
|
| Without the cast, this outputs 8 as you would likely expect.
*/

echo ((0.1 + 0.7) * 10);
```

## Sources

- [Zend PHP 5 Certification Study Guide, 3rd Edition](https://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/)
