<?php
// return declare and goto statements
//#### return statement
//function sum(int $x, int $y){
//    $z = $x + $y;
//    return $z;
//}
//$p = sum(44, 33);
//echo $p;
//
//// if write return statment in the global scope(outside of the func), execution of current script will be stopped
//return;
//
//echo "<br/>";
//echo  "Hello Man!";

// declare statement

## declare - ticks

//function onTick(){
//    echo 'Tick <br>';
//}
//
//register_tick_function('onTick');
//declare(ticks = 3);
//$i = 0;
//$length = 10;
//
//while($i < $length){
//    echo $i++. "<br>";
//}

##declare-strict types
declare(strict_types = 1);

function sum(int $a, int $b){
    return $a + $b;
}
$p = sum('2', 5);
echo $p;
