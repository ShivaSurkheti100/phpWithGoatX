<?php
// arrow functions: callback func

//$array = [1, 2, 3, 4];
//
//$array2 = array_map(function ($element){ // passing anonymous function
//    return $element * 2;
//}, $array);
//
//echo "<pre>";
//print_r($array);
//echo "<pre>";
//print_r($array2);

//$sum = function (callable $callback, int|float ...$numbers): int|float{
//    return $callback(array_sum($numbers));
//};
//echo $sum(function ($element){
//    return $element * 2;
//}, 1, 2, 3, 4);

// arrow functions
$array = [4, 3, 4, 3];
$array2 = array_map(fn($number) => $number * $number, $array);
echo '<pre>';
print_r($array2);
echo '<pre>';
