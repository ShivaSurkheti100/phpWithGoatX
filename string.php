<?php

// Strings
//$firstName = "Shiva";
//$fullName = "$firstName Surkheti";
//$fullName = "$firstName. Surkheti";
//echo $fullName;

$firstName = "Mitchell";
$lastName = "Johnson";
$name = $firstName. ' '. $lastName;
echo $name;
echo "<br>";
echo $name[0]. "<br>";
echo $name[4]. '<br>';
$name[1] = "I";
$name[-3] = "P";
$name[14] = " ";
echo $name. "<br>";
var_dump($name);