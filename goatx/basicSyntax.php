
<?php
//    echo "Hi", " ", "GoatX"; // concatenation can be done with echo only (print shows parse error)
//    echo '<br>';            // for a new line
//    echo "Joe", "'s ", "invoice";
//    echo "<br>";
//    echo 'Joe\'s Invoice';


$name = "Shiva Surkheti ";
echo $name;

// variables

//$x = 4;
//$y = $x;
//$x = 6;
//echo $y;


// "&" is used for whenever x changes y also changes
$x = 4;
$y = &$x;
$x = 6;
echo $y;

$firstName = "GoatX ";
echo " Hello $firstName";

// concatenation of variables

$tribalChief = "Roman Reigns";
echo "Hello ". $tribalChief;
