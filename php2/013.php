<?php 
#1
$arr = [];
$arr ["vardas"] = 'kestas';
$arr[0]="jonas";
$arr[20] = "gabriele";
for ($i=0;  $i < 30; $i++) {

}

$arr = [];
for ($i=0; $i < 30; $i++) {

    $arr[] = rand(20,40);
    $arr[$i] = rand(20,40);
}
print_r($arr);

# paimti kiekvieno masyvo elementa. count suskaciiuja kiek masyve elemetu. kiek skaiciu vienojeeil
for($i=0; $i < count($arr); $i++){
   echo $arr[$i]. "";
}
#2

$arr1 = [];
for($i=0; $i < 10; $i++){
$arr1[] = $i; // masyvas uzsipildys slaiciais nuo 0 iki 9. sukurti masyva o paskui pildyti

}
print_r($arr1);
echo"<hr>";

$arr2 = [];
for($i=10; $i < 19; $i++){
$arr2[] = $i;
}
print_r($arr2);
echo "<hr>";


#count - kiek masyve elementu.

$minVal =0;
$maxVal = count($arr3) -1;
//$arr2[count($arr2) -1];
//rand(0, count($arr3)-1);
//for($i=0; $i < 100; $i++) {
//    $minVal=0;
//    $maxVal = count($arr) -1
//     = rand($minVal, $maxVal);
//    echo$minVal, $maxVal ."";
//}

echo "<hr>";
for($i=0; $i < 100; $i++) {
    $randomPosition = rand($minVal, $maxVal);
    $rndNum = $arr[$randomPosition];
    echo $rndNum."";
}
echo "<hr>";
#3

$arr3 = [[]];
for ($i=0; $i < 10; $i++) {
    for($a=0; $a < 10; $a++) {
        $arrMin[] = rand(0,9);
    }
    $arr3[] = $arrMin; // idejimas i tustaji masyva
}
echo"<pre>";
print_r($arr3);
echo "<hr>";
# [] [] - idejimas i masyva
$arr4 = [];
for ($i=0; $i < 10; $i++) { // i = 0 
    for($a=0; $a < 10; $a++) { // a nuo 0 iki 10;
        $arr4[$i][] = rand(0,9); // $arr[0][0] = 1; $arr5[0][2] = 1;
    }
}
echo"<pre>";
print_r($arr4);
echo "<hr>";
print_r(range(20,40));

## multi massive - dvimatis masyvas
echo "<hr>";

print_r($arr0);
echo "<hr>";
for($i=0; $i < count($arr0); $i++) {
echo "mokinys".$i.":";
for ($a=0; $a < count($arr0[$i]); $a++){
    echo $arr0[$i][$a]."";
}
echo "<br>";
}

for($i=0; $I < count($arr0); $i++){
    for($a=0; $a < count($arr5[$I]); $a++)
    echo $arr5[$i][$a] * $arr0[$i][$a];
    echo pow($arr5[$i][$a],2)."";
}
echo "<br>";
#4 

$gyvunas=[];
$gyvūnas['species']='lion';'tiger';'turtle';'fox';"wolf";  
$gyvūnas['age']=7; 10; 5; 14; 16;
$gyvūnas['name']='leo'; 'tyge'; 'turt'; 'fx'; 'wf';  
$gyvūnas['description']='big'; 'small'; 'thin'; 'fat'; 'noize';
$gyvunas = ['species' => 'lion', 'species' => 'tiger'];
print_r($gyvunas);
echo "<br>";
echo $gyvunas['name'];
echo "<br>";

$arr5 = [];
for($i=0; $i < 10; $i++){

}
print_r($arr5);
echo "<hr>";

#5

$names = ["vardas1","vardas2","vardas3","vardas4","vardas5","vardas6","vardas7","vardas8","vardas9","vardas10"];
$species = ["kangaroo","gazele","lion","parrot","hawk","kong","eagle","pantera","crock","frogg"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi","greitai skrenda","didesnis nei liutas","greitai skrenda","greitesne is gyvynu","agresyvesnis is gyvunu","ilgas liezuvis"];
$zoo = [];
for($i=0; $i < 20; $i++){
$zoo[$i]['name'] = $name[rand(0,count($names) -1)]; 
$zoo[$i]['species'] = $species[rand(0,count($names) -1)];
$zoo[$i]['age'] = rand(0,12); 
$zoo[$i]['description'] = $description[rand(0,count($names) -1)]; 
}
for($i=0; $i < count($zoo); $i++) {
    echo $zoo[$i]['name']."".$zoo[$i]['species']."".$zoo['age']."".$zoo[$i]['description']."<br>";
}

#6 daugybos lentele

for ($i=1; $i < 10; $i++) {
    for ($a=1; $a < 9; $a++) {
        echo $ $i*$a."";
    }
    echo"<br>";
}
echo"<hr>";

#7 funkcija priemanti/nepriemanti. grazinanti/ negrazinanti

function message() {
    echo "hello world!<hr>";
        }
    message(); // call the function

function sayHi(){
    echo"hi<hr>";
}

sayHiYou("Petras");
function sayHiYou($name){
    echo "Labas".$name."<hr>";
}

echo myPi();
function myPi (){
    return 3.1415925;
}

function firstDgt($pirmi8){
    $rez = substr("$pirmi8", 0,9);
    return $rez;

}
$pi = 3.14159265359;
$spausdina = firstDgt($pi);
echo $spausdina;


sq(65, 24);
function sq($a, $b) {
    return $a * $b;
}


#8 ilgis plotis

function circleSq($r){
return myPi() * $r * $r;

}

function circleLength($r) {
return 2* myPi() * $r;
}
echo circleSq(10)."<br>";
echo circleLength(10)."<br>";

#9 


?>