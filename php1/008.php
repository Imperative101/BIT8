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

// 5 uzd
$count = 0;
$abc="ABCD"; /// su skirtingom raidem 3 masivus
$random1=[];
$random2=[];
$random3=[];
$mergedarr=[];
$word="";
for($i = 0; $i<200; $i++){
array_push($random1,$abc[rand(0,3)]);
array_push($random2,$abc[rand(0,3)]);
array_push($random3,$abc[rand(0,3)]);
}
//print_r($random1);
//print_r($random2);
//print_r($random3);

for($i = 0; $i<200; $i++){
    $word = $random1[$i].$random2[$i].$random3[$i]; //iesko pirmojo masyvo nulinio indekso elemento. taskas sudeda indeksus
    array_push($mergedarr, $word);
}
print_r($mergedarr);
$unique = array_unique($mergedarr);
$dupes = array_diff_key($mergedarr,$unique);
$dupeval = array_count_values($dupes);

foreach ($dupeval as $key => $value){
    if ($value == 1){
        $count++;
    }
}

echo "<br>Unikalios kombinacijos masyve: ";
print_r(count(array_unique($mergedarr)));
echo "<br>Unikalios, nepasikartojančios reikšmės: ".$count;




// php array_

// 6 uzd


//$rndNums = [];
//$rndNums = [];
//for ($i=0; $i < 100; $i++) { 
//    $rndNums[$i] = rand(100,999);
// }
// print_r($rndNums);
// print_r($rndNums);
 

////////////// word merge unique dupes
 $rndNums=[];
 $rndNums2=[];
 $mergedarr=[];
 $word="";
 $rand=rand(100,999);
 for($i=0; $i<100; $i++){
     if (!in_array($rand, $rndNums)) { 
        array_push($rndNums, rand(100,999));
 } 
 if (!in_array($rand, $rndNums2)) { 
    array_push($rndNums2, rand(100,999));
} 


}
 echo "<br>";
 print_r($rndNums);
 echo "<br>";
 print_r($rndNums2);
 


// for($i = 0; $i<100; $i++){
//    $word = $rndNums[$i].$rndNums2[$i]; //iesko pirmojo masyvo nulinio indekso elemento. taskas sudeda indeksus
//    array_push($mergedarr, $word);
//}
//print_r($mergedarr);
//$unique = array_unique($mergedarr);
//$dupes = array_diff_key($mergedarr,$unique);


//7 sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, 
//bet nėra antrame 6 uždavinio masyve.
$rndNums=[];
$rndNums2=[];
$mergedarr=[];
$word="";
$rand=rand(100,999);
for($i=0; $i<100; $i++){
    if (!in_array($rand, $rndNums)) { 
       array_push($rndNums, rand(100,999));
} 


}
echo "<br>";
print_r($rndNums);

//8 Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

//9 Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.


//10 Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.





// pavyzdys animals

$zoo = [
    ['species'=> 'monkey', 'age'=>13,'gender'=>'male'],
    ['species'=> 'aligator', 'age'=>13,'gender'=>'male'],
    ['species'=> 'rat', 'age'=>13,'gender'=>'male'],
    ['species'=> 'kangaroo', 'age'=>13,'gender'=>'female'],
];
foreach ($zoo as $animal) {
    echo $animal['species']. "".$animal['age'];
}
for ($i=0; $i < count($zoo); $i++) {
    $animal = $zoo[$i];
    echo $animal;
}
///


echo '11. <br>';
$array7 = [];
$length = 0;
do {
    $unique = false;
    do {
        $random = rand(0, 300);
        if (!array_search($random, $array1)) {
            $array7[$length] = $random;
            $unique = true;
            $length++;
        }
    } while (!$unique);
} while ($length < 101);
rsort($array7);
$biggest = $array7[0];
// print_r($array7);
unset($array7[0]);
// print_r($array7);
$sorted = false;
    $array8 = [];
    $array9 = [];
do {
    shuffle($array7);
    $sorted = true;
    $array8 = [];
    $array9 = [];
    $j = 0;
    $sum1 = 0;
    $sum2 = 0;
    foreach($array7 as $value) {
        if ($j % 2 === 0) {
            $array8[] = $value;
            $sum1 += $value;
        } else {
            $array9[] = $value;
            $sum2 += $value;
        }
        $j++;
    }
    $diff = ($sum1 > $sum2) ? $sum1 - $sum2 : $sum2 - $sum1;
    //echo "$diff  ";
    if ($diff > 30) {
        $sorted = false;
        shuffle($array7);
    }
} while (!$sorted);
sort($array8);
rsort($array9);
$array8[] = $biggest;
foreach ($array9 as $value) {
    $array8[] = $value;
}
print_r($array8);


////
$pirmaPuse=0;
$antraPuse=0;
$pirminisMasyvas=[];
$counter=0;
//generuoja skaiciu masyva
do{
$random=rand(0,300);
    if(!in_array($random,$pirminisMasyvas)){
    $pirminisMasyvas[]=$random;
    $counter++;}
}
while($counter<101);
//suranda didziausia skaiciu reiksme issaugo ir istrina is masyvo
$didziausiasSkaicius=max($pirminisMasyvas);
$indexOfMax=(array_search(max($pirminisMasyvas), $pirminisMasyvas));
unset($pirminisMasyvas[$indexOfMax]);
//tikrina ar masyvo skaiciai iki vidurinio is abieu pusiu nesiskiria per 30 , jai skirias sumaiso masyva. 
do{
    shuffle($pirminisMasyvas);
foreach ($pirminisMasyvas as $key => $value) {
    if($key<50){
        $pirmaPuse+=$value;
    }
    else{
        $antraPuse+=$value;
    }
}
}
while($pirmaPuse-$antraPuse>30);
//dalinam masyva
$masyvasPoPadalinimo=array_chunk($pirminisMasyvas,50);
 
sort($masyvasPoPadalinimo[0]);
rsort($masyvasPoPadalinimo[1]);
//jungiam masyva
array_push($masyvasPoPadalinimo[0],$didziausiasSkaicius);
$sujungtasMasyvas=array_merge($masyvasPoPadalinimo[0],$masyvasPoPadalinimo[1]);
 
print_r( $sujungtasMasyvas);
/////////

?>