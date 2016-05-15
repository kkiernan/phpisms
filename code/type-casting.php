<?php

/*
|---------------------------------------------------------------------
| Type Casting
|---------------------------------------------------------------------
*/

// Any number greater than zero converts to boolean true.
var_dump((bool) 5.8);

// False
var_dump((bool) 0);

// True
var_dump((bool) 0.25);

// True
var_dump((bool) "1");

// False
var_dump((bool) "0");

// True
var_dump((bool) "01");
