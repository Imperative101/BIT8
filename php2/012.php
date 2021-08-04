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


$names = ["vardas1","vardas2","vardas3","vardas4","vardas5","vardas6","vardas7","vardas8","vardas9","vardas10"]
$species = ["kangaroo","gazele","lion","parrot","hawk","kong","eagle","pantera","crock","frogg"]
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi","","","","","","","",]

//        5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
//         iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//         masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
//        5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.



    $multmassive = [
        '1' => ['species' => lion, 'height' => 180],
        '2' => ['species' => lion],
        '3' => ['species' => lion],
        '4' => ['species' => lion],
        '5' => ['species' => lion],
        '6' => ['age' => 7],
        '7' => ['age' => 7],
        '8' => ['age' => 7],
        '9' => ['age' => 7],
        '10' => ['age' => 7],
        '11' => ['name'=> neo],
        '12' => ['name'=> neo],
        '13' => ['name'=> neo],
        '14' => ['name'=> neo],
        '15' => ['name'=> neo],
        '16' => ['description'=>hawk],
        '17' => ['description'=>hawk],
        '18' => ['description'=>hawk],
        '19' => ['description'=>hawk],
        '20' => ['description'=>hawk]

    ];
    echo $multmassive['1']['2'] ."<br>";




    $newmassive = array
    (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";





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



  /*funkcijos
  =======================

  1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
  1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
   tas paduotas kintamasis

  1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

  1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

  1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
  bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
  1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
  bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
  1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
  ir atspausdina:
   apskritimo ilgis: (tai ka gražino funkcija 1f)
   apskritimo plotas: (tai ka gražino funkcija 1g) */


  ?>