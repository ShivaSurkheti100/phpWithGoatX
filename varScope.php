<?php

// variable scope
//$x = 6; // this is a global scope
//function foo(){
//    echo $x;        // every variable within the function has local scope.
//}
//foo();

// can be fixed with 3 ways
// 1st way
$x = 6;
function hoo(){
    $x = 4;
    echo $x;
}
hoo();

echo "<br>";

// 2nd way
$x = 6;
function what($x){
    echo $x;
}
what(-5);

echo "<br>";

// 3rd way
$x = 99;
function suu(){
    global $x;
    $x = 88;
    echo $x;
}
suu();
echo $x;

echo '<br>';

// static variable
function getValue(){
    static  $value = null;
    if ($value === null){

    $value = someVeryExpensiveFunction();
    }

    return $value;
}
function someVeryExpensiveFunction() {
    sleep(2);
    return "Processing!";
}
echo getValue(). "<br>";
echo getValue(). "<br>";
echo getValue(). "<br>";