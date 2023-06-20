<?php
// Logical Operators (&&, ||, !, and, or, xor)
 $x = false ;
 $y = 1;
var_dump(!$x || $y);

// Bitwise Operators ( &, |, ^, ~, <<, >>)
$r = 6;
$t = 3;
// 110 & 011 ... returns 1 if both 1: 010
var_dump($r & $t);

// 110 | 011 ... 111
var_dump($r | $t);