<?php
// function within the function
function foo(){
    echo "Foo";
    function bar(){
        echo 'BARZ';
    }
}

// bar() doesn't exist until foo() is called.
//foo();
//bar();

// return type
//function too(): int {
//    return 1;
//};
//var_dump(too()); // returns int(1)

// NEXT UP

//function pO(): int | float | array
//{
////    return 1.4;
//    return ["shiva", 4.5, 4];
//}
//var_dump(pO());

// can use mixed instead
function gO(): mixed{
    return 67.477493;

}
var_dump(gO());