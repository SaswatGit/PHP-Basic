<?php

//'$_GET' is super global variable that returns an array
print_r($_GET);

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
    <?php $id=10; ?>
    <a href="1.get.php?id=<?php echo $id; ?>">Click</a>
</body>
</html>