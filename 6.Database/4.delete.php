<?php
include "./api/dbconnect.php";
$query = "SELECT * FROM user";

$result = mysqli_query($connection, $query);

if(!$result){
    die("Something went wrong!");
}

?>

<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];

    $update_query = "DELETE FROM user WHERE Id = $id";

    $res = mysqli_query($connection, $update_query);
    if(!$res){
        die("Something went Wrong!" . mysqli_error());
    }else{
        $showAlert = true;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
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
    <div class="row">
            <div class="col-md-6 offset-md-3 login-container">
                <h2 class="text-center">Delete</h2>
                <?php
                if($showAlert){
                    echo "<h2 style = 'color: red;'>Deleted</h2>";
                }
                ?>
                <form action="./4.delete.php" method="post">
                        <select name="id" id="">
                            <?php
                            
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['Id'];
                                echo "<option value='$id'>$id</option>";
                            }
                            
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
