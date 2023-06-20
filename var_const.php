<?php
// variables
//$firstName = "GoatX";
//$firstName = "Shiva";
//echo $firstName;

// constants defined using define func
define('STATUS', 'PAID');
echo STATUS;
echo defined ('STATUS'); // bool value returns 1 or true
echo "<br>";

// next way to defined constant using const keyword

const PI = 3.14;
echo PI;

// const is used for static data (e.g pending, declined, ...)
// pre-defined const

echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo PHP_URL_PORT;
echo '<br>';

// magic constant

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';

// variable variable concept ::: imp concept of concatenation as well using ", " and ". "

$var = "bar";
$$var = "baz";
//echo $var, $$var;
//echo $var.$$var;
//echo $var, ' ', $$var;
echo $var. ' '. $$var;