<?php
/* Booleans
        All of these evaluate to FALSE
 * integers 0, -0 --> false
 * floats 0.0, -0.0
 * ''(empty string), '0'
 * '0'
 * [](empty array)
 * null
 *
 * 1, '0.0' evaluates to true
 *
 */

$isComplete = 'false';
if($isComplete){
    echo "Success";
} else{
    echo "Fail";
}


////  using isbool() func
//$isCorrect = true;
////echo $isCorrect;
//echo "<br>";
//
////var_dump($isCorrect); // returns bool(true) if value is true; string typecast nagarda
//var_dump($isCorrect); // returns string(0) "" if the value is false; string ma typecast garda
//echo "<br>";
//
//// Another way to check either bool or not is using "isbool()" func
//var_dump(is_bool($isCorrect));


// typecasting bool to string
$isCorrect = (string) true;
//echo $isCorrect;
echo "<br>";

//var_dump($isCorrect); // returns bool(true) if value is true; string typecast nagarda
var_dump($isCorrect); // returns string(0) "" if the value is false; string ma typecast garda
echo "<br>";

// Another way to check either bool or not is using "isbool()" func
var_dump(is_bool($isCorrect));

