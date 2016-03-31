# Languages Constructs

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Introduction](#introduction)
- [Examples](#examples)
- [Sources](#sources)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Introduction

Language constructs are elements that are built into the language, the most common of which is probably `echo`. Others include `die`, `exit`, `isset`, `unset`, `include`, `require` and `print`. These are not actually built-in functions; the difference is in how the PHP engine interprets the two. Language constructs also don't require parenthesis.

## Examples

```php
// Output: Hello, World!
echo("Hello, World!");

// Output: Hello, World!
echo "Hello, World!";

// Output: String 1String 2
echo "String 1", "String 2";
```

## Sources

- [PHP Language Constructs vs Built-in Functions](http://www.phpknowhow.com/basics/language-constructs-vs-built-in-functions/)
