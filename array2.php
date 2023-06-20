<?php
$array = ['a', 'b', 30 => 'c', 'd', 'e'];
echo array_pop($array); // removes last element of an array
echo "<br>";
//echo array_shift($array); // removes first element from an array

// you have to specify index while using unset() --> unset($array); is wrong
echo "<br>";
unset($array[30], $array[3]);
//echo $array;
print_r($array);

echo "<br>";
// empty array [] or array()
$array1 = [1, 2, 3];
unset($array1[0], $array1[1], $array1[2]);
print_r($array1);

echo "<br>";
// Casting to arrays
$x = "55 Shiva";
$y = null;
$k = 4;
var_dump((array)$x);
echo "<br>";
var_dump((array)$y); // empty array {}/array()/[]
echo "<br>";
var_dump((array)$k);
//print_r((array)$x);


// array_key_exists() and isset()
$Array = ['a' => 1, 'b' => null, 'c' => -4];
echo "<br>";
var_dump(array_key_exists('b', $Array)); // if key actually exists in an array or not
echo "<br>";
var_dump(isset($Array['b'])); // if the key exists and it's not null . key means index