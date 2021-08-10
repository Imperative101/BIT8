<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-paskaita PHP</title>
    <style>
    </style>
</head>
<body>

<!-- ???? -->
    <div class="<?php echo 'containeris'?>">
        <p>PHP klase</p>
    </div>
<!-- ???? -->
    <?php
        $kazkoksTaiTekstas = "Kazkoks tai tekstas";
        // echo "<div class='container'>";
        echo '<div class="container">';
        echo $kazkoksTaiTekstas;
        echo "</div>";
    ?>



    <?php 
        echo "labas";
        // echo $skaicius;
    ?>
    <!-- PHP koda -->
       
    <!-- dokumentas yra pavadintas index.html arba index.php -->

    <p>Labas, sitas dokumentas yra lokaliame serveryje</p>
    <?php 
        //Kintamieji

        $tekstas = "Tekstas";
        $sk = 5.5;
        $tiesa = true;
        $melas = false;
        $skaicius = 4;

        echo $skaicius,$tekstas,$sk; //
        //Tarpas tarp kintamuju?
        //Javascript +; tekstas + " " + tekstas = tekstas tekstas
        // Noriu kelti i kita eilute? <br>
        echo $skaicius.",".$tekstas.",".$sk;
        echo "<br>";
        echo $skaicius,",",$tekstas,",",$sk;
        
        echo $tiesa; //vizualiai nebus atvaizduojamas
        echo $melas; //vizualiai nebus atvaizduojamas

        echo "<br>";
        echo "Labas, sitas tekstas parasytas su PHP pagalba";
        echo "Kitas tekstas pasrasytas PHP pagalba";
    ?>     


    <script>

        var kintamasis;
        kintamasis = 5;
        "use strict";
        console.log("labas");
    </script>
</body>
</html>