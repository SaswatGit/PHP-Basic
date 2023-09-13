<?php

if(isset($_POST["submit"])){
    echo "It works";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./1.checking_form_submission.php" method="post">
        <input type="text" placeholder="Enter Username">
        <input type="password" placeholder="Enter Password">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>