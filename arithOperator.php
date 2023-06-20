<?php
/* Operators */

// Arithmetic Operators +, -, *, /, %, **(expo)
$x = 10;
$k = '10';
$p = + '54';
$y = 3.0;
var_dump($x + $k); // returns int(20)
var_dump($x ** $y);
var_dump($k);
var_dump(+$k);
var_dump($p);

// fdiv(x, y) handles error to make the result INF: fdiv() performs floating-point division
var_dump(fdiv(10, 0));
// fmod(x, y) fmod function calculates the floating-point remainder of x/y
var_dump(fmod(10.5, 2.9));

var_dump(20 % -3); // returns int(2)
var_dump(-20 % 3); // returns int(-2)

