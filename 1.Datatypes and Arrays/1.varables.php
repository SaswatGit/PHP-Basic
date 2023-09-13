<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variabls</title>
</head>
<body>
    <?php

    //variables can not start with a number
    //variables can not contain '-' i.e $num-list is wrong way of declaring a variable 
    //PHP is a case sensitive language i.e $name and $Name is different


    $name = "Saswat";
    $num = 20;
    $_str = "Hello World";

    // echo $name;
    // echo $num;
    // echo $_str;

    //we can concat two value using dot(.)
    $str1 = "Hello";
    $str2 = "How are you ?";

    echo $str1 . " " . $str2;

    //we can assign html tags to a variable in PHP
    $title = "<h1>Hello</h1>";
    echo $title;

    ?>
</body>
</html>