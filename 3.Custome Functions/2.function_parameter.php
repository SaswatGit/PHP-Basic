<?php

function greeting($txt){
    echo '<h1>txt</h1><br>';
}
//$txt is the parameter

greeting("Hello");
//"Hello" is an argument

function add($a, $b){
    echo $a+$b;
}
//$a and $b are the function parameters

add(4, 5);
//4 and 5 are the arguments
?>