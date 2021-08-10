<?php 
$color = "black";
if (isset($_GET["color"]))
{
    print_r($_GET);
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
        body {           
            background-color: '<?= $color ?>';
            }
    </style>
</head>
<body style="background-color:black;", color = "1">
<br>
    <br><a href='php3/016.php'> LINK </a> 
    <br><a href="php3/016.php?color=1" form method="get" > LINK </a>



</body>
</html>

