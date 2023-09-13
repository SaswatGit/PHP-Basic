<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "../api/dbconnect.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    //mysqli_real_escape_string is used to escape brackets, quotations etc.

    //Password encryption
    $hashFormat = "$2y$10$";
    $salt = "dfjsldhrilfdnvnkjahsdhlfhgljfhlhfljasdhljfhlnvcm"; //any random string but atleast 22 characters
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);



    $query = "INSERT INTO user(Name, Password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if($result){
        echo "Successfully Created.";
    }else{
        die("Something went wrong!" . mysqli_error);
    }
}

?>