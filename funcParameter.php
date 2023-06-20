<?php
// functions

declare(strict_types =1);

/// ...$var is splat operator
function sum(...$numbers): int|float{
//    $sum = 0;
//    foreach ($numbers as $number){
//        $sum += $number;
//    }
//    return  $sum;

    // you can use array_sum() instead of above statements
    return array_sum($numbers);
};

$a = 6.0;
$b = 7;
echo sum($a, $b, 50, 100, 25, 8, 9). '<br>';