<?php
// require, require_once, include, include_once

// <include> results in warning while <require> reuslts in an error .... if the file doesn't exist.

//include 'file.php';
//require 'file.php';
//require 'loop.php';
$x = include 'string.php';
echo "<br>";
var_dump($x); // file exists so returns int(1)

echo 'Hello World';
