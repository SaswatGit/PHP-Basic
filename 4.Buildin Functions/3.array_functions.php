<?php

$list = [45, 34, 67, 34, 87, 23, 87];

//display the maximum and minimun number
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";

//sorting
//display the array before sorting
print_r($list);
echo "<br>";

//display the array after sorting
sort($list);
print_r($list);
echo "<br>";

//check if the value is inside an array
$names = ["Ravi", "Akash", "Nilesh"];
if(in_array("Ravi", $names)){
    echo "In the array.";
}else{
    echo "Not in the array.";
}



?>