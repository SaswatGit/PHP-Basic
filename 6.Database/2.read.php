<?php
include "./api/dbconnect.php";
$query = "SELECT * FROM user";

$result = mysqli_query($connection, $query);

if(!$result){
    die("Something went wrong!");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <?php

            //'mysqli_fetch_assoc' or 'mysqli_fetch_row' convert all rows into arrays
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <pre>
                <?php
                print_r($row);
                ?>
                </pre>
                <?php
            }


            ?>
        </div>
    </div>
</body>
</html>
