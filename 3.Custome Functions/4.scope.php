<?php

$x = "Hi";//global variable

function convert(){
    global $y;//declaring $y as global variable
    //we can not access this variable($y) without the line : global $y;
    $y = "Hello";//local variable
}

echo $x . "<br>";

convert();

echo $y;

?>