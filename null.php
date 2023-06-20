<?php
// Null datatype :
# All variable names are case-sensitive!
//In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
$x = null;
$y = Null;
$z = NULL;
$k = nUll;
$t = 543;
echo $x;
var_dump($x);
var_dump($y);
var_dump($z);
var_dump($k);
var_dump(is_null($t));
var_dump(is_null($k));

// to check , use === comparison operator
echo "<br>";
var_dump($x === null);

var_dump($p); // not defined so "NULL" is returned
// unset makes the same case . let's have a look
unset($k);
var_dump($k);
echo '<br>';;
// Typecasting
$a = null;
var_dump((string)$a);
echo '<br>';;
var_dump((int)$a);
var_dump((array)$a);
var_dump((bool)$a);




