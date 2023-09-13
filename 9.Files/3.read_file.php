<?php

$file = "example.txt";

if($handle = fopen($file, 'r'))
{
    $content_1 = fread($handle, 10); //second parameter represent bite(1 bite equals to one character)
    //$content_1 = fread($handle, filesize($file)); //second parameter is a function that return filesize

    echo $content_1 . "<br>";

    fclose($handle);
}
else{
    echo "Can not write file!";
}


?>