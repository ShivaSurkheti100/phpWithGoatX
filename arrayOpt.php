<?php
// Array Operator ( +, ==, ===, <>, !=, !==)
$x = ['a' => 1, 'b' =>2, 'c'=> 3];
$y = ['d'=>4, 'e'=>5, 'f'=>6, 'g'=> 7];

$z = $x + $y;
print_r($z);
var_dump($x == $y);

// loose comparison ==
$x = ['a' => 1, 'b' =>2, 'c'=> 3];
$y = ['a'=>1, 'b'=>'2', 'c'=>3];
var_dump($x == $y);

// strict comparison ===
$x = ['a' => 1, 'b' =>2, 'c'=> 3];
$y = ['a'=>1, 'b'=>'2', 'c'=>3];
var_dump($x === $y);

