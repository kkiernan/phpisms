# PHP Tags

- [Introduction](#introduction)
- [Standard Tags](#standard-tags)
- [Echo Tags](#echo-tags)
- [Short Tags](#short-tags)
- [Script Tags](#script-tags)
- [ASP Tags](#asp-tags)
- [Sources](#sources)

## Introduction

When PHP parses a file, it looks for opening and closing tags so that it knows where to start and stop interpreting code. PHP has five types of tags: standard, echo, short, script and asp. Everything outside of these tags is ignored by the PHP parser.

*If a file is pure PHP code, it is preferable to omit the closing tag, which the parser considers perfectly legal.*

## Standard Tags

Standard tags are the de-facto opening and closing tags. These are the best solution for portability and backwards compatibility because they are guaranteed to be available and cannot be disabled.

```php
<?php
// Code here
?>
```

## Echo Tags

Echo tags print the result of an expression. As of PHP 5.4.0, echo tags are always enabled regardless of the `short_open_tag` ini setting or `--enable-short-tags` option. Prior to 5.4.0, short tags had to be enabled in order to use echo tags.

```php
<?= $variableToEcho; ?>
```

## Short Tags

Short tags were the standard for some time, but conflict with XML processing instructions so they are **deprecated and not recommended.**

```php
<?
// Code here
?>
```

## Script Tags

Script tags were used so that HTML editors could ignore PHP code. These tags are not recommended and were **removed in PHP 7.0.0.**

```php
<script language="php">
// Code here
</script>
```

## ASP Tags

ASP tags were introduced at some point for whatever reason, but are considered deprecated and not recommended. In fact, ASP tags were **removed in PHP 7.0.0.**

```php
<%
// Code here
%>
```

## Sources

[PHP Manual](http://php.net/manual/en/language.basic-syntax.phptags.php)
[Zend PHP 5 Certification Study Guide, 3rd Edition](https://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/)
