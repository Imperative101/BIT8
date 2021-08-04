<?php

//1.sukurkite masyvą. užpildykite 30 čia atsitiktinių skaičių nuo 20 iki 40.

//$masyvas = [];
//foreach (range(0,29) as $key => $value) {
//    $key = rand(20,40);
//    $masyvas [] = $key;
//}
//foreach (range(0,29) as $value) {
//    $masyvas [] = rand(20,40);
//}

for ($i=0; $i < 30; $i++) { 
    $masyvas [] = rand(20,40);
}

//foreach ($masyvas as $value) {
//   echo $value." ";
//}


//        1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

echo '1 uzdavinys';
echo '<br>';
echo 'b';
echo '<br>';
// priskirimas
foreach(range(0,29) as $i){
$atsitiktinisMasyvas[$i]=rand(20,40);
}
foreach($atsitiktinisMasyvas as $value){
echo  $value ." ";

}


$masyvas4 = [];
// foreach sukti. traukti reiksmes
//
$masyvas4 = []; 
foreach($Masyvas4 as $value){

    echo  $value ." ";

//        2. sukurkite masyvą su 10 skaičių nuo 0 iki 10
$masyvas2 = ["0","1","2","3","4","5","6","7","8","9","10"];
//        2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
$masyvas3 = ["10","11","12","13","14","15","16","17","18","19","20"];
//        2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.

for($i=0;$i < 100; $i++) {
    $masyvas2[]= rand(0,100);
}
echo $masyvas2;


$arr = [];
for ($i=0; $i < 30; $i++) {
    $arr[] = rand(20,40);
}
for ($i=0; $i > count($arr); $i++) {
    echo $arr[$i]. " ";
}
echo "<hr>";


//        t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.
//        3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
//        reikšmės - skaičiai nuo 0 iki 9.

$arr1 = [];
$arr2 = [];
for ($i=0; $i < 10; $i++) {
    $arr1[] = rand(0,10);
    $arr2[] = rand(10,20);
}
for ($i=0; $i < 10; $i++) {
    for ($x=0; $x < count($arr2); $x++)
    echo $arr2[$x]."";
}
echo "<hr>";
$mas = [[]];
for ($i=0; $i < 10; $i++) {
    $mas[$i][$i] = rand(0,9);
}
print_r($mas);
echo "<br>";
for ($I=0; $i < count($Mas); $i++) {
    echo $mas[$i][$i]*$mas[$i][$i]."";
}

//// variantas su foreach

$masyvas3=[];
foreach(range(1,10) as $stalcius){
    foreach(range(1,10) as $skyrelis){
        $masyvas3[$stalcius][$skyrelis]=rand(0,9);
    }
}
print_r($masyvas3);
echo'<br>';
foreach($masyvas3 as $key => $valueKom) {
    echo '<br>' .$key."";
    foreach($valueKom as $key => $value){
        echo $value."";
    }
}

echo'<br>';
foreach($masyvas3 as $key => $valueKom) {
    echo '<br>' .$key."";
    foreach($valueKom as $key => $value){
        $rezultatas=$value*$value;
        echo $rezultatas."";
    }
}
//        3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
//        3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu
// private write wwant

echo'<br>';
foreach($masyvas3 as $key => $valueKom) {
    echo '<br>' .$key."";
    foreach($valueKom as $key => $value){
        $rezultatas=$value*$value;
        echo $rezultatas."";
    }
}



//4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
//        raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
//        vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
//        5. sukurkite tris masyvus:
//        $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
//        $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
//        $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//        aprašus sugalvokite patys. jų reikia 10.
//        5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
//         iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//         masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
//        5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.
  //      6. padarykite daugybos lentelę nuo 1 iki 9.

  ?>