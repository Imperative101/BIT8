<?php
// masyvai right way
// 1

echo '<h3>1. ir 2.</h3>';
$count=0;
$even=0;
$array = [];
for ($i=0; $i<30; $i++) {
    $array[] =rand(5,25);
    if($array[$i] > 10) {
        $count++;
    }
  if($i%2==0){
      $even+=$i;
  };
  }



for ($i=0; $i < count($array); $i++) {
    if($array[$i] > 10) {
        $count++;
    }
}

for ($i=0; $i < count($array); $i++) {
    if($array[$i] > 10) {
        $count++;
    }
}

for ($i=0; $i < count($array); $i+=2) {
    $even += $array[$i]; // $i = 0,2,4,6,8,10
}

//// arba
// PIRMAS 
echo'<h1>- 1 -</h1>';
echo'<h2>Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29),
    kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.</h2>';
    $arRnd= [];
    $arr = [];
    $count = 0;
    $max = 0;
    $sum = 0;
 
    for ($i=0; $i <=29 ; $i++) { 
        array_push($arRnd,rand(5,25));
    }
    var_dump($arRnd);


    ////////////


//A
$arr = $arRnd;
    foreach($arr as $num){
        echo $num." ";
        if ($num>10){
            $count++;
        }
    }
//B
$max = max($arr);
echo "<br>".'Masyve reikšmių didesnių už 10 yra: '.$count."<br>";
echo 'Didžiausia reikšmė yra masyve: '.$max.'<br>';
echo 'maksimalus skaiciai yra siuose indeksuose: ';
for ($i=0; $i <count($arr) ; $i++) { 
    if ($arr[$i]==$max){
        echo $i.' ';
    }
}
// C
echo'<h4>C) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;</h4>';
echo "<br>";
    for ($i=0; $i < count($arr); $i+=2) { 
        $sum +=$arr[$i];
    }
    echo 'Poriniu indeksu reiksmiu suma: '.$sum."<br>";

    

// D
echo'<h4>D) Sukurkite naują masyvą, kurio reikšmės yra 1 
    uždavinio masyvo reikšmes minus tos reikšmės indeksas;</h4>';
    $arrD = $arRnd;
    echo "<br>";
    for ($i = 0; $i < count($arrD) ; $i++) { 
        $arrD[$i] = $arrD[$i] - $i;
    }
    
    foreach($arrD as $i){
        echo $i.' ';
    }
// E

for ($i=30; $i <=39 ; $i++) { 
    array_push($arrD, rand(5,25));
}
echo "<br>";
foreach($arrD as $num){
    echo $num." ";
}
echo "<br>";


//F
echo'<h4>F) Iš masyvo elementų sukurkite du naujus masyvus.
    Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;</h4>';
    $odd = [];
    $even = [];
 
    for ($i=0; $i <count($arrD) ; $i++) { 
        if ($i%2==0){
            array_push($even, $arrD[$i]);
        } else {
            array_push($odd, $arrD[$i]);
        }
    }
 
    foreach($odd as $oddIndex){
        echo $oddIndex." ";
    }
    echo "<br>";
    foreach($even as $evenIndex){
        echo $evenIndex." ";
    }
// G
echo "<br>".'Pries: '."<br>";
print_r($arrD);
echo "<br>".'Po: '."<br>";
    for ($i=0; $i < count($arrD); $i+=2) { 
    if ($arrD[$i] > 15){
        $arrD[$i] = 0;
    }
    }
    print_r($arrD);
    echo '<h4>H) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;</h4>';
    for ($i=0; $i <count($arrD) ; $i++) { 
        if ( $arrD[$i]>10){
            echo 'maziausias indeksas reiksmes didesnes nei 10: ['.$i.'] => '.$arrD[$i]."<br>";
            break;
            }
    }

    

echo'<h1>- 3 -</h1>'; 
echo'<h2>Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200.
    Suskaičiuokite kiek yra kiekvienos raidės.</h2>';

    $abc1 = [];
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $abcd = array("A" ,"B","C" ,"D");
    for ($i=0; $i < 200; $i++) { 
        $temp = $abcd[rand(0, count($abcd)-1)];
        switch($temp){
            case "A":
                $a++;
                break;
            case "B":
                $b++;
                break;
            case "C":
                $c++;
                break;
            case "D":
                $d++;
                break;
        }
        $abc1[] = $temp;
    }
    // print_r($abc1);
    
    foreach($abc1 as $letter){
        echo $letter." ";
    }
    echo "<br> A = ".$a.' B = '.$b.' C = '.$c.' D = '.$d."<br>";


/////////////////////

    $count=0;
    $array4= [];
    for($i=0; $i < 30; $i++) {
        $array4[$i] = rand(5,25);
    }
    echo"<br>";
    $odd=array();
    $even=array();

    foreach ($array4 as $value) {
        if($count%2==0) {
            $even[]=$value;
            $count++;
        } else {
            $odd[]=$value;
            $count++;
        }
    }

for ($i=0; $i < count($array4); $i++) {
    if($i % 2 ==0) {
        $even[] = $value;
    } else {
        $odd[] = $value;
    }
}

    echo "<br>f) Masyvas: ";
    print_r($array4);
    echo "<br>";
    echo "<br> Lyg Masyvas: ";
    print_r($even4);


//3 Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.


$rndNums = ["A", "B", "C", "D"];
for ($i=0; $i < 200; $i++) { 
    $rndNums[$i] = rand(0,200);
 }
 print_r($rndNums);
 echo "<br>";

 /// arba

 $letters = ['A', 'B', 'C', 'D'];
 echo $letters[rand(0,3)];
 for ($i=0; $i < 10; $i++) {
$arr[] = rand(0,10);
 }
 print_r($arr);

//// count letters
$letters = ["A", "B", "C", "D", "E","F"];
for ($i=0; $i < 10; $i++) {
    $arr[] = $letters[rand(0, count($letters)-1)];
}
foreach ($arr as $letters) {
    echo $letter. "";
}
echo"<br>";

$arr2;
for ($i=0; $i < 29; $i++) {
    $arr2[] = $letters[rand(0, count($letters)-1)];
}
$arr = array_merge($arr,$arr2);
print_r($arr);



//4 Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

$rndNums = ["A", "B", "C", "D"];
for ($i=0; $i < 200; $i++) { 
    $rndNums[$i] = rand(0,200);
 }
 print_r($rndNums);
 echo "<br>";

for ($char = 'A'; $char <= 'Z'; $char++) {
    echo $char . "\n";
}

//5 Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.


//6 Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
$rndNums = [];
for ($i=0; $i < 999; $i++) { 
    $rndNums[$i] = rand(100,999);
 }
 print_r($rndNums);

//Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).


//7 ugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
//8 Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
//9 Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
//10 Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.


// pavyzdys animals




?>