<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "userlogin";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("Can not connected");//die stops all command and display the string inside die().
}

?>