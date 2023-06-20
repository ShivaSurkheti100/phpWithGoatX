<?php
// Data types & Type Casting

# 4 Scalar types
    # bool -true, false
    $status = false;
    # int - 0, 2, 4, -4, -5 , (no decimal)
    $score = 77;
    # float - 4.5, 0.1, 0.005, -12.56
    $price = 56.44;
    # string -"Gio", 'Hello World'
    $greeting = "Good Afternoon";

    echo $status. "<br>"; // <br> is an html element for separate line
    echo $score. "<br>";
    echo $price. "<br>";
    echo $greeting. "<br>";

    // To know the type of variable
    echo gettype($score);
    echo "<br>";
    var_dump($greeting);
    echo "<br>";
    var_dump($score);

# 4 Compound Types
    // array
    $getDetails = ["Amit", 20, 56.5, true];
    echo $getDetails;
    echo "<br>";
    print_r($getDetails);

    // object
    // callable
    // iterable

# 2 Special Types
    // resource
    // null

// Points to Remember

$rank = '39';
echo "<br>";
var_dump($rank);
echo "<br>";

# Type Conversion
function sum(int $x, int $y){
    var_dump($x, $y);
    echo "<br>";
    return $x + $y;
}
$sum = sum(5.5, '99');
echo $sum. '<br>';
var_dump($sum);

echo "<br>";
$i = '6.4';
var_dump($i);

echo "<br>";
// to typecast into integer use int keyword
$num = (int) '55';
var_dump($num);