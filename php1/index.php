<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<?php 

//1 Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :

$myName = "Jake";
$mysecondname = "M";
$myyear = "1999";
$year = "2005";

echo "myName = $myName  ";
echo "<br />";
echo " mysecondname = $mysecondname ";
echo "<br />";
echo "myyear = $myyear ";
echo "<br />";
echo "year = $year ";
echo "<br />";


//2 Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$x = 0;
$y = 4;
echo mt_rand($x, $y);
$dal = $x / $y;
echo "result of $x and $y = $dal <br />";
echo(round(0.5) . "<br>");


$rand1 = rand(0,4);
$rand = rand(0,4);
echo "2." . $rand1 . " " . $rand . "<br>";
if ($rand >0) {
    echo "Answer" . (round ($rand1 / $rand2, 2)) . "<br>";
} else {
    echo " dalyba is 0 negalima<br> ";
}

// 3 Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$n1 = rand (0, 25);
$n2 = rand (0, 25);
$n3 = rand (0, 25);
echo "<h2>" . $n1 . ", ".$s2 . " ,". $s3 ." </h2><br>";
if ($n1 > $n2 && $n1>$n3 || $s1<$s2 && $s1>$s3) {
echo "<h3> vidutine reiksme:" . $s1 . "</h3><br>";
} elseif ( $n1 < $n2 && $n3<$n2 || $s1<$s2 && $s2<$s3) {
    echo "<h3>vidurine reiksme: " . $s2 . " </h3><br>";
}
elseif ($s3<$s1 && $s3>$s2 || $s3<$s2 && $s3>$s1) {
    echo "<h3>vidurine reiksme: " . $s3 . " </h3><br>";
} else {
echo "<h3> vidutines reiksmes negalima nustatyti, nes aptiktos vienodos reiksmes </h3>";
}

//4 Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 


$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
echo"<h2> random numbers: " . $a . ", " .$b .", ".$c." </h2><br>";
if(($a+$b<$c)&&($a+$c>$b)&&($b+$c>$a)) {
echo "<h3>Trikampis galimas </h>";
} else {
    echo "<h3>Trikampis negalimas </h>";
}



# 0-100

$x = rand (0, 100);
$y = rand (0, 100);
$z = rand (0, 100);
echo mt_rand($x, $y, $z);
$dal = ($x + $y + $z)/3;
echo "result of $x and $y and $z= $dal <br />";
echo(round(1.0) . "<br>");

$rand1 = rand (0, 100);
$rand2 = rand (0, 100);
$rand3 = rand (0, 100);
$vidbe = 0;
echo "kintamieji: ".$rand1." ".$rand2." ".$rand3;
$vid = ($rand1 + $rand2 + $rans3)/3;
echo"<br>kintamuju vidurkis:".round($vid,0,PHP_ROUND_HALF_UP);
$COUNT = 0;
if ($rand1>10 && $rand1<90){
    $vibe += $rand1;
    $count++;
}
if ($rand2>10 && $rand1<90){
    $vibe += $rand1;
    $count++;
}
if ($rand3>10 && $rand1<90){
    $vibe += $rand1;
    $count++;
}


// 6 Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$x = 1;
$y = 6;
echo mt_rand($x, $y);
$dal = $x / $y;
echo "result of $x and $y = $dal <br />";
echo("h3" . round(0.5) . "<h3>");


#kaina

$kaina = rand(5,3000);
if($kaina<1000){
    $kainasu=$kaina;
}
if($kaina>1000 && $kaina<2000 ){
$kainasu = $kaina * 0.97;
}
if ($Kaina>2000) {
    $kainasu = $kaina * 0.96;
}
echo $kaina = $kaina." zvakiu kainuos: ".$kainasu." EUR";

#birthdate
#way 1
$from = new DateTime('1999-12-22');
$to   = new DateTime('today');
echo $from->diff($to)->y;

# way3
echo date_diff(date_create('1999-12-22'), date_create('today'))->y;

#way 2

    $dob='1999-12-22';
    $diff = (date('Y') - date('Y',strtotime($dob)));
    echo $diff;

//output 21


#clock



?>






<h1> <?php echo $name ?></h1>
<h1> <?=$name?> </h1>

</script>
</body>
</html>