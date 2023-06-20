<?php
/* Integers */

// These are predefined constants
//echo PHP_INT_MAX;
//echo PHP_INT_MIN;
//echo PHP_INT_SIZE. '<br>';

//$x = 0x2A; // hexadecimal(prefix by 0x)
//$x = 055; // octal(prefix by 0)
//$x = 0b1101; // binary(prefix by ob)
//echo $x;
//echo "<br>";
//echo PHP_INT_MAX + 1;
//echo "<br>";
//var_dump(PHP_INT_MAX);
//echo "<br>";
//var_dump(PHP_INT_MAX + 1 );

// typecasting to integer

$k = (int) 'percent';
var_dump($k);

$m = (int) '87.87 percent';
var_dump($m);

$n = (int) null;
var_dump($n);

// using isint() func
echo "<br>";

$p = 9999;
echo is_int($p);

$p = (int) null;
echo "<br>";
var_dump(is_int($p));





