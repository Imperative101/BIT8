<?php 

// Masyvai
// 1 Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
//kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

// paprastas masyvas:
//$a = array_fill(0,30, "ban");
//print_r($a) ;
//echo "<br>"; 

$rndNums = [];
for ($i=0; $i < 30; $i++) { 
    $rndNums[$i] = rand(5,25);
 }
 print_r($rndNums);
 echo "<br>";

// a

$numbers = array_fill(0,30, "ban");
print_r($numbers) ;
echo "<br>";

$numbers=array(0,30);
echo count($numbers);



function findGreaterNumberCount($array, $number) {
    $count = 0;
    foreach ($array as $value) {
        if ($value > $number) {
            $count++;
        }
    }
    return $count;
}
echo findGreaterNumberCount(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30), 10);
echo "<br>";


// 

$numbers = range(0, 30);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
echo "<br>";
// b index


$numbers = range(0,30);
shuffle($numbers);
foreach ($numbers as $key => $value) {
    echo $value . " in " . $key . ", ";
    echo "<br>";
}


$list = array('0', '1', '2','3','4','5','6','7','8','9','10');

foreach ($list as $key => $value) {
    echo $value . " in " . $key . ", ";
    echo "<br>";
}

// c odd

$numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
$sum = array_sum($numbers);
foreach ($numbers as $index=>$value) {
  if ($value % 2 == 0)
  echo "$value <br>";
  $sum = $sum - $value;
}
echo 'odds: '. $sum;
echo "<br>";


// d Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes 
//minus tos reikšmės indeksas;

$rndNums = [];
for ($i=0; $i < 30; $i++) { 
    $rndNums[$i] = rand(5,25);
 } 
 print_r($rndNums);
 echo "<br>";

// e Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

//3 Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
//4 Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
//5 Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
//6 Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
//7 ugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
//8 Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
//9 Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
//10 Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.







?>