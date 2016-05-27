# Comments

<!-- START doctoc -->
<!-- END doctoc -->

PHP gives the developer a number of choices for writing comments. It supports C, C++, and Unix shell-style (Perl style) comments.

```php
// Single line comment
```

```php
# Single line comment
```

```php
/* Multi-line comment
   can span many lines... */
```

```php
/**
 * Documentation example.
 *
 * @param string $foo
 *
 * @return string
 */
function foo($foo) {}
```

I'll also note that I personally like the Laravel style comments for setting off a specific section of code. These comments are nicely formatted versions of the multi-line comment (but not related to the Zend exam). Here is an example from the Laravel source (it's beautiful right!?).

```php
/*
|--------------------------------------------------------------------------
| Application Debug Mode
|--------------------------------------------------------------------------
|
| When your application is in debug mode, detailed error messages with
| stack traces will be shown on every error that occurs within your
| application. If disabled, a simple generic error page is shown.
|
*/
```
