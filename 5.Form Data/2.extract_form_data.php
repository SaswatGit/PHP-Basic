<?php

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo "<br>";
    echo $password;
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
    <form action="./2.extract_form_data.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>