<?php 
if(isset($_GET['go']) ){
    header("location:./red.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color link</title>
    <style> 
    </style>
</head>
<body style="background-color:blue ;">
<br>
    <br><a href='blue.php'> blue </a>
    <br><a href='red.php'> red </a>
    <a href="?go=1">to myself </a>
</body>
</html>