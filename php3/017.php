<?php 

$color = "white";
if(isset($_GET['COLOR'])){
    header("LOCATION:./017.PHP");
    DIE; EXIT;
    $color = $_GET['color'];
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
    .bg-color{
        background-color:#<?= $color ?>;
        background-color:<?= $color ?>;
    }
    
        </style>
</head>
<body class="bg-color">
<br>
    <br><a href='./017.php'> LINK </a>


    <h1><?=$_GET['vardas']."". $_GET['pavarde']?>  </h1>
    <h1><?= (isset($_GET['vardas'])) ? $_GET['vardas']: "" ?></h1>
</body>
</html>

