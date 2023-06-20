<?php
// variable , anonymous, and arrow functions
function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

//$x = sum(1, 2, 3, 4, 5);
//echo $x;
$x = 'sum';
//echo $x(1, 2, 3, 4);

// is_callable() func is used to check if variable can be called
if (is_callable($x)){
    echo $x(1, 2, 3, 4);
} else{
    echo "Not callable";
}
echo "<br>";
// anonymous function: function has local scope
$sum = function (int|float ...$number): int | float{
    return  array_sum($number);
};
echo $sum(4, 3, -33, 2);