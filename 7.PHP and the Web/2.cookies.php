<?php

$name = "SomeName";
$value = 200;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    if(isset($_COOKIE["SomeName"])){
        $someOne = $_COOKIE["SomeName"];
        echo $someOne;
    }else{
        echo "Cookie is not set.";
    }
    //"$_COOKIE" returns an associative array
    
    ?>
</body>
</html>