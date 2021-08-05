<?php

//1.sukurkite masyvą. užpildykite 30 čia atsitiktinių skaičių nuo 20 iki 40.

//$masyvas = [];
//foreach (range(0,29) as $key => $value) {
//    $key = rand(20,40);
//    $masyvas [] = $key;
//}
foreach (range(0,29) as $value) {
        $masyvas [] = rand(20,40);
}

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


//KAIP TAISYKLINGAI RASYTI MASYVA @@@!!!!!!!!!!!!!!!
$gyvūnas['species']='lion';'tiger';'turtle';'fox';"wolf";  
$gyvūnas['age']=7; 10; 5; 14; 16;
$gyvūnas['name']='leo'; 'tyge'; 'turt'; 'fx'; wf;  
$gyvūnas['description']='big'; 'small'; 'thin'; 'fat'; 'noize';
// print_r(array_keys($a,"noize"));


//        5. sukurkite tris masyvus:
//        $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
//        $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
//        $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//        aprašus sugalvokite patys. jų reikia 10.


$names = ["vardas1","vardas2","vardas3","vardas4","va0rdas5","vardas6","vardas7","vardas8","vardas9","vardas10"];
$species = ["kangaroo","gazele","lion","parrot","hawk","kong","eagle","pantera","crock","frogg"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi","greitai skrenda","didesnis nei liutas","greitai skrenda","greitesne is gyvynu","agresyvesnis is gyvunu","ilgas liezuvis"];

//        5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
//         iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//         masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
//        5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.



    $multmassive = [
        '1' => ['species' => lion, 'age' => 7, 'name'=> leo, 'description'=>'big'],
        '2' => ['species' => tiger, 'age' => 10, 'name'=> tyge, 'description'=> 'small'],
        '3' => ['species' => turtle, 'age' => 5, 'name'=> turt, 'description'=>'thin'],
        '4' => ['species' => fox, 'age' => 14, 'name'=> fx, 'description'=>'fat'],
        '5' => ['species' => wolf, 'age' => 16, 'name'=> wf, 'description'=>'noize'],

    ];
// priskirimas ?
    foreach ($multmassive as $i){
        $multmassive[$i]=rand($species); /// ???
    }
        foreach($multmassive as $value){
        echo  $value ." ";
        
        }

    echo $names[] ."<br>";
    echo $species []."<br>";
    echo $descriptions[] ."<br>";

    echo $multmassive['1']['2']['3']['4'] ."<br>";
    echo $multmassive['5']['6']['7']['8'] ."<br>";
    echo $multmassive['9']['10']['11']['12'] ."<br>";
    echo $multmassive['13']['14']['15']['16'] ."<br>";
    echo $multmassive['17']['18']['19']['20'] ."<br>";



  //      6. padarykite daugybos lentelę nuo 1 iki 9.

  $cols = 9;  
  $rows = 9; 
  $number = 1;
  $number2 = 0;
  echo "<table border=\"1\">"; // table border - THIS IS TABLE
  
  for ($r = 0; $r < $rows; $r++){  // !
  echo('<tr>');
  if ($r == 0) {   ///// ar $ r yra 0 (kad nebūtų kartojama pirmoji eilutė), ir pradėti $ skaičių nuo 1 (vadovaudamiesi ta pačia logika, bet pradedant nuo 1).
      for ($i = 0; $i < $rows; $i++) {
          echo('<td>' .$number2++.'</td>');
      }
  }
  
  for ($c = 0; $c < $cols; $c++){
      if ($c == 0 && $r != 0) {
          echo('<td>' .$number++.'</td>');
      } else if ($r != 0) {
          echo( '<td>' .$c*$r.'</td>');
      }
  }
  echo('</tr>');
  }
  
  echo("</table>");



//  funkcijos

//  1. sukurkite funkciją kuri išspausdina kokį nors tekstą.


function message() {
echo "hello world!";
    }
message(); // call the function

 // 1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
 //  tas paduotas kintamasis

    function add1() {
        return labas;
    }
    echo " labas ".add1();

     function sveikinimas()
{
    return (labas);
}
list ($zodis) = sveikinimas();

 // 1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

 // 1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

    function add2($x,$y) {
        return $x + $y;
        $z = $x + $y;
    }
    echo $z;

  function add1($x) {
  return $x + 1;
}
echo "5 + 1 is " . add1(5);


function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");

//  1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą

$diameter = 8;
$pi = 3.14;
$title="Circle";
function circleArea($diameter,$pi) {
    $area = $diameter * $pi;
    return $area;
}
echo circleArea($diameter, $pi);


//  bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
//  1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
//  bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

$pi = 3.14;
$diameter = 8;
$radius = 4;
function circle($pi, $diameter, $radius) {
$c = 2 * $pi * $radius;
return $c;
}
echo length ($c);
 // 1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
 // ir atspausdina:
 //  apskritimo ilgis: (tai ka gražino funkcija 1f)
  // apskritimo plotas: (tai ka gražino funkcija 1g) 


  ?>