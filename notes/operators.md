# Operators

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Introduction](#introduction)
- [Arithmetic Operators](#arithmetic-operators)
    - [Increment and Decrement Operators](#increment-and-decrement-operators)
- [String Concatenation Operator](#string-concatenation-operator)
- [Bitwise Operators](#bitwise-operators)
    - [Bitwise Not Example](#bitwise-not-example)
- [Sources](#sources)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Introduction

There are a number of operators in PHP, the most common of which include:

- Assignment Operators - Assigning data to variables
- Arithmetic Operators - Performing basic math
- String Operators - Joining strings
- Comparison Operators - Comparing data
- Logical Operators - Performing operations on boolean values

PHP also provides the following operators:

- Bitwise Operators - Manipulate bits using boolean math
- Error Control Operators - Suppress errors
- Execution Operators - Execute system commands
- Increment/Decrement Operators - Add to and subtract from numerical values
- Type Operators - Identify objects

Most operators are binary; they require two operands, and all binary operations use infix notation  (the operator is written between its operands like 2 + 2). 

## Arithmetic Operators

Operator       | Example         | Notes
-------------- | --------------- | -----
Addition       | $a = 1 + 2.8;   |
Subtraction    | $a = 4 - 2;     |
Multiplication | $a = 5 * 10;    |
Division       | $a = 15 / 5;    |
Modulus        | $a = 23 % 7;    |
Power          | $a = 2 ** 9;    | Added in PHP 5.6.
Increment      | $a++; ++$a;     |
Decrement      | $a\-\-; \-\-$a; |

### Increment and Decrement Operators

These are a special category of operator that are used to increment or decrement the value of an integer by one. If the operator is placed to the right of the operand, the value is returned first and then incremented by one. If the operator is placed to the left of the operand, the value is incremented by one and then returned.

```php
$a = 1;

// Prints 1. Decrements $a, which is now 0.
echo $a--;

// Prints 0.
echo $a;

// Increments $a, which is now 1. Prints 1.
echo ++$a;
```

## String Concatenation Operator

PHP provides a single string concatenation operator. Note that if the addition operator is used to concatenate strings, the strings will be converted to numeric values and added together.

```php
// Output: Foo Bar
$foo = "Foo";
$bar = "Bar";
echo $foo . " " . $bar;
```

```php
// Output: 0
$foo = "Foo";
$bar = "Bar";
echo $foo + " " + $bar;
```

## Bitwise Operators

Bitwise operators manipulate bits of data, and they are designed to work on integers, so the interpreter converts the operands into integers before executing the operation.

Name         | Example      | Result
------------ | ------------ | ----
And          | $a & $b      | Bits that are set in both $a and $b are set
Inclusive Or | $a &#124; $b | Bits that are set in either $a or $b are set
Exclusive Or | $a ^ $b      | Bits that are set in $a or $b but not both are set
Not          | ~ $a         | Bits that are set in $a are not set, and vice versa
Shift Left   | $a << $b     | Shift the bits of $a $b steps to the left (each step means "multiply by two")
Shift right  | $a >> $b     | Shift the bits of $a $b steps to the right (each step means "divide by two")

### Bitwise Not Example

```php
/*
|---------------------------------------------------------------------
| Bitwise Not (Decimal Number 10)
|---------------------------------------------------------------------
|
| Output: -11
|
| PHP calculates the output by adding all of the set bits together,
| which in this case looks like the following equation:
|
| (-128) + 64 + 32 + 16 + 4 + 1
|
| Let's take a look at the decimal 10 as an 8-bit binary number:
|
| 0000 1010
|
| The bitwise not operation of this value results in:
|
| 1111 0101
|
| The sign of the leftmost digit is inverted, so 128 becomes -128.
| Add the remaining set bits to get the final value of -11.
|
*/

echo ~ 10;
echo "\n";

/*
|---------------------------------------------------------------------
| Bitwise Not (Decimal Number 120)
|---------------------------------------------------------------------
| 
| Output: -121
|
| 120 as an 8-bit binary number: 0111 1000
|
| Flipping the bits gives us: 1000 0111
|
| Which gives us the formula: (-128) + 4 + 2 + 1 = -121
|
*/

echo ~ 120;
```

## Sources

- [PHP Manual](http://php.net/manual/en/language.operators.bitwise.php)
- [Zend PHP 5 Certification Study Guide, 3rd Edition](https://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/)
