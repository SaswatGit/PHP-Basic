<?php

    $array1 = array(2, 3, 4);

    $array2 = [2, 3, 4];//most used

    //to print an array with structure
    print_r($array2);
    echo "<br>";

    //printing array element with index
    echo $array2[0];

    echo '<br>';

    //Associative array

    $names = ["first"=>"Harry", "second"=>"Bunny"];
    print_r($names);
    echo '<br>';
    echo $names['first'];
    //echo $names[0]; throw an error

?>