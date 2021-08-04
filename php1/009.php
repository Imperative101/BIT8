<?php 

// 1 Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

$count=0;
$even=0;
$array = [];
for ($i=0; $i<10; $i++) {
    $array[] =rand(5,25);
    if($array[$i] > 10) {
        $count++;
    }
  }
echo "<br>";
print_r($array);


//2 Naudodamiesi 1 uždavinio masyvu:
//a Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$count=0;
$even=0;
$array = [];
for ($i=0; $i<10; $i++) {
    $array[] =rand(5,25);
    if($array[$i] > 10) {
        $count++;
    }
  }

$array = $arRnd;
foreach($arr as $num){
      echo $num." ";
      if ($num>10){
          $count++;
      }
  }

echo "<br>";
print_r($array);



//b Raskite didžiausio elemento reikšmę;
$array = [];
for ($i=0; $i<10; $i++) {
    $array[] =rand(5,25);
    if($array[$i] > 10) {
        $count++;
    }
  }
  echo(max($array) . "<br>");
  print_r($array);


//c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 

$array = [];
for ($i=0; $i<10; $i++) {
    $array[] =rand(5,25);
    if($array[$i] > 10) {
        $count++;
    }
  }

$res = array_icount_values ($array);
print_r($res);  

function array_icount_values($array,$lower=true) {
     $arr2=array();
     if(!is_array($array['0'])){$array=array($array);}
     foreach($array as $k=> $v){
      foreach($v as $v2){
      if($lower==true) {$v2=strtolower($v2);}
      if(!isset($arr2[$v2])){
          $arr2[$v2]=1;
      }else{
           $arr2[$v2]++;
           }
    }
    }
    return $array;
}


//d Visus masyvus “pailginkite” iki 7 elementų
//e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas 
//panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 


//3 Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas 
//su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 

$masyvas3 = [];
$masyvas4 = [];
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10 ; $j++){
        $randomele5[] = rand(2,20);
    }
    foreach ($masyvas3 as $key => $value) {
        $slug[] = $value['slug'];
        $title[] = $value['title'];
      }
      $required_array = array_combine($slug, $title);
}

echo "<br>";
print_r($masyvas3);

//Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
//Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

///???
$masyvas10 = [];
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 5 ; $j++){
        $randomele5[] = rand(5,25);
    }
    $masyvas10[$i] = $randomele5;
    $randomele5 = []; 
}

$keys = array_column($masyvas10, 'place_in_row');
    array_multisort($keys, SORT_DESC, $info);



//4 Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
//kad elementai kurių masyvai trumpiausi eitų pradžioje. 
//Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
// kazkur buvo. uzduotis su raidemis




//5 Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id 
// kazkaip priskirti abc
//atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
// ++++ rand 2 times
//6 Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
//Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
// <; >; uzduotis su didejimu

//7 Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. /// ???
//Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

//8 Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
//Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. 
//Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
//Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

// if else - jeigu...
//9 Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
//kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
// 1. sum., 2. if else.. min max...



?>