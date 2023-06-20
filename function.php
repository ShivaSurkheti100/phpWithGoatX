<?php

// 1st way
//function foo()
//{
//    echo "Hello Shiva! <br> What's Going on? <br> And How you doing your php?";
//}
//foo();

// 2nd way
//function func(){
//    return "Welcome to PHP Programming! <br> Best Wishes.";
//}
//$f = func();
//echo $f;

// 3rd way
function func(){
    return "Welcome to PHP Programming! <br> Best Wishes.";
}
echo func();

// return statement is an optional
function shiSu(){
    return;
}
var_dump(shiSu()); // returns NULL

echo "<br>";

// with condition
if(true){
    function myCup(){
        return "FIFA World Cup 2022 Qatar";
    }
}
var_dump(myCup());

