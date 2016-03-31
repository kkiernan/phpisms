# Operators

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Introduction](#introduction)
- [Arithmetic Operators](#arithmetic-operators)
    - [Increment and Decrement Operators](#increment-and-decrement-operators)
- [String Concatenation Operator](#string-concatenation-operator)
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

## Sources

- [Zend PHP 5 Certification Study Guide, 3rd Edition](https://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/)
