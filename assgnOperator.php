<?php
// Assignment Operators ( =, +=, -=, /=, %=, **=)
$x = ($y = 10) + 5;
var_dump($x, $y);

$k = 4;
$k /= 3;
echo ($k);

// String Operators( . , .=)
$t = "Hey ";
echo $t . ' '. "Boy"; // . is concatenation operation

echo "<br>";

// Using concatenation  assignment operator
$t .= "Man! ";
echo $t;

// Comparison Operators ( ==, ===, !=, <>, <, > , <=, >=, <==>, ??, ?:)
$p = 4;
$q = '4';
var_dump($p == $q); // check for equality of values without checking the data type
var_dump(($p === $q)); // check for equality of values and the data type
var_dump($x <> $y);





