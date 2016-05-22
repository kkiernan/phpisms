<?php

/*
|---------------------------------------------------------------------
| Return Null
|---------------------------------------------------------------------
|
| PHP returns null automatically if you do not specify a return value
| for a function. This means that the concept of return void doesn't
| really exist in PHP.
|
*/

function returnNullExample()
{
    // I return null, not "void"
}

var_dump(returnNullExample()); // prints "NULL"
