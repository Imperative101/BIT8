<?php

$name = "";
$surname = "";

//if (isset($_GET['varas']) && isset($_GET['pavarde']) ) {
//echo "Labas ".$_GET['vardas']."".$_GET['pavarder'].".";
//}
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



    <h1><?=$_GET['vardas']."". $_GET['pavarde']?>  </h1>
    <h1><?= (isset($_GET['vardas'])) ? $_GET['vardas']: "" ?></h1>
    <h1> 
    <?php 
    
    if (isset($_GET['vardas']) ) {
        echo $_GET['vardas'];
    }
        echo " ";
        if(isset($_GET['pavarde'])) {
        echo $_GET['pavarde'];
        }
    
    ?>    

    </h1>


    <form action="" method="post">
    <input type="text" name="vardas">
    <button type="submit"></button>
</body>
</html>