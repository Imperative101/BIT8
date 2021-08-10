<?php
if(isset($_GET['color'])) {
echo "color kintamasis yra" ; 
}else {
    echo "color kintamojo nera";
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
<body>
<br>
<a href="?color=2">c2</a>
<form action="" method ="get">
    <button typr="submit">get</button>
<form action="" method ="post"> 
<button typr="submit">post</button>

</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $color="green";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color link</title>
    <style> .bg-color{
background-color: yellow;
    }
    </style>
</head>
<body>
<br>
</body>
</html>