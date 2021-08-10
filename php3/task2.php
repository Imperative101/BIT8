<?php

$letters = ['A','B','C'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lbl {
            color: white;
        }
        </style>
</head>
<body style="background-color:black;">
<form action="" method="">
    <?php for ($i=0; $i < rand(3,10); $i++) { ?>
        <label class="lbl" for="a<?=$i?>"><?=$lettes[$i]?></label>
        <label for="a<?=$i?></label>">
        <input type="checkbox" name="A" id="a<?= $i ?>">
        <?php } ?>
        <br><button type="submit">generate</button>
    </form>
</body>
</html>