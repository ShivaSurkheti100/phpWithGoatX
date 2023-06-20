<?php
// ?:(ternary), ??
//$x = "Hello World";
//$y = strpos($x, "H"); // returns index of first occurrence of string (int value)
//
//$result = $y === false ? 'H Not Found' : "H Found at index ". $y;
//echo $result;
//
//$q = $p ?? 'hello';
//var_dump($q);
//
//// error control operator (@)
//$b = @file('foo.txt'); // to handle error
//
//

// Increment and Decrement Operator

$x = 5;
// post-increment operator ....print rw operation ko kura xa
echo $x++. "<br>"; // returns 5: first prints the value
echo $x. "<br>"; // Now increment operation i.e 6

// pre-increment operator
echo ++$x, "<br>"; // first increment i.e 7
echo $x. "<br>";    // prints the value 7

// post-decrement : print and operation ko kura aauxa
echo $x--, "<br>"; // returns 7
echo $x. "<br>"; // returns 6

// pre-decrement operator
echo --$x. "<br>"; // returns 5
echo $x;        // returns 5

// strings are also affected: only integers and strings are affected
echo "<br>";
$y = 'a';
echo $y++; // value chai b xa
echo "<br>";
echo $y--; // prints b and value chai a
echo "<br>";
echo ++$y;
echo "<br>";
echo --$y;