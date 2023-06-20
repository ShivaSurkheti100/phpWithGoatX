<?php
// Array are of Three Types: Indexed array([]), Associative array(=>), Multidimensional array([[], []]

// strings
$name = "Gio";
//echo $name[0];
echo $name[-1]. "<br>";

// Array : can be defined using either ways
$programming_languages = ["PHP", "Python", "Java", "Swift"];
$programming_languages = array("PHP", "C#", "C++", "Python");
echo $programming_languages[2]. "<br>";

//echo $programming_languages[-1]; // negative indexing not valid in an array : (valid in string)
//echo $programming_languages[4]; // index 4 or key 4 not defined

// to check if the item exists at that specific key : use isset()
//var_dump(isset($programming_languages[6]));
//var_dump(isset($programming_languages[1]));

// to change the name of element in array
$programming_languages[1] = "C Programming";
//echo $programming_languages[1];
//var_dump($programming_languages);

// to make it look better and extra fancy use "print_r"
print_r($programming_languages);

// ajhai ramro banauna use html pre-tags <pre> </pre>
echo "<pre>";
print_r($programming_languages);
echo "</pre>";


$programmngLangauge = ["PHP", "Python", "Java", "Ruby"];
echo count($programmngLangauge); // length of  any array

// array_push() is used to push elements to the end of array
array_push($programmngLangauge, "GO", "C#", "Swift", "R");

// Not looking much better
//echo "<pre>";
//var_dump($programmngLangauge);
//echo "</pre>";

// Now looking better
echo "<pre>";
print_r($programmngLangauge);
echo "</pre>";


// Array Concept 03
$programmingLang = array(
    'php' => 8.44,
    'python' => 3.77
);

$newLang = 'go';
$programmingLang[$newLang] = 9.55;

echo "<pre>";
print_r($programmingLang);
echo "</pre>";

echo $programmingLang['php']. "<br>";
echo $programmingLang['go'];


