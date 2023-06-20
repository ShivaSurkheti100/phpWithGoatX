<?php
//floats

$x = 14.5e8;        // 14.5e4, 14.5e-4
//echo $x;
var_dump($x);

// predefined const
//echo PHP_FLOAT_MAX;
//echo PHP_FLOAT_MIN;
echo "<br>";

$x = 0.23;
$y = 1 - 0.77;
var_dump($x, $y);
if($x == $y){
    echo "Yes";
} else{
    echo "No";
}

// Not a number(NAN), Infinity (INF)
echo "<br>";
echo NAN, "<br>";
echo log(-1), "<br>";
echo INF. "<br>";
$t = PHP_FLOAT_MAX * 2;
echo $t, "<br>";
//var_dump($t);
//var_dump(is_infinite($t));
var_dump(is_finite($t));
echo '<br>';

$q = NAN;  // check for log(-2)
var_dump(is_finite($q));
var_dump($q);
var_dump(is_nan($q));

// converting to float
echo "<br>";
$r = "7.88 Chirag";
var_dump((float) $r);

$b = (float) "Shiva";
var_dump($b);

$c = (float) "9";
var_dump($c);



