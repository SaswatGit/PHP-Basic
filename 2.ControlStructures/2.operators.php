<?php

//comparision operators
//equal -> ==
//not equal -> !=
//not identical -> !==
//identical -> ===
//compare -> > < >= <= <>

$num1 = 5;
$num2 = 6;
if($num1 != $num2){
    echo 'Two numbers are not equal.<br>';
}

//logical operators
//and -> &&
//or -> ||
//not -> !

if($num1 == 5 && $num2 == 6){
    echo "First number is 5 and second is 6.<br>";
}

//difference between equal(==) and identical(===)
//using equal
if(4 == "4"){
    echo "Yes<br>";
}else{
    echo "No<br>";
}
//integer four is equal to string four

//using identical
if(4 === "4"){
    echo "Yes<br>";
}else{
    echo "No<br>";
}
//integer four is not equal to string four

?>