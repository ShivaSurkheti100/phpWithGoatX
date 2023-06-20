<?php
// Loops

// while loop
$i = 0;
//while ($i <= 10){
//    echo $i++;
//}

// example of infinite loop (page slowly load hunxa) and harms the applications
//$i = 15;
//while ($i>=10){
//    echo $i++;
//}

while (true){
    if($i >=10){
        break;
    }
    echo $i++. ", ";
}

echo "<br>";;

// do-while loop
$i = 0;
do{
    echo $i++;
} while($i <= 10);

echo "<br>";

// for loop

for($i = 0; $i <= 100; $i++){
    echo $i. ", ";
}
echo "<br>";

// iterate over string too
$text = 'Hello World';
for($i = 0; $i < strlen($text); $i++){
    echo $text[$i]. '<br>';
}
echo "<br>";
// iterate over array
$text = ['a', 'b', 'c', 'd'];
for ($i = 0; $i< count($text); $i++){
    echo $text[$i]. '<br>';
}

// foreach loop ( iterate over arrays and objects)
$programmingLanguages = ["php", 'java', 'c++', 'go', 'rust'];
foreach ($programmingLanguages as $key => $language){
    echo $key. ":". $language. "<br>";
}

// iterate over associative array (=>)
$user = [
    'name' => 'Gio',
    'email' => 'gio@gmail.com',
    'skills' => ['php', 'graphic', 'react']
];
// json_encode() converts php data/ php object($value) into json format and returns json string
// json_decode() decodes or converts json object into a php object
foreach($user as $key => $value ){
    echo $key. ': ', json_encode($value). "<br>";
}