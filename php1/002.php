<?php 

// 1 uzd
$name = "Leo";
$surname = "Dicaprio";
// php string length
if(strlen($name) < strlen($surname)){
    echo $name."<br>";
}

    if(strlen($name) < strlen($surname)){
        echo $name."<br>";
    }

    strtoupper($name)."<br>";
    strtolower($surname)."<br>";
    echo $name[0].$surname[0];
echo substr($name,0,1).substr($surname,0,1)."<br>";

//2
echo strtoupper($name)."<br>";

echo strtolower($surname)."<br>";


echo $name[0].$surname[0]."<br>";
echo substr($name,0,1).substr($surname,0,1)."<br>";

//4

echo $name[0].$name[1].$name[2].$surname[0].$surname[1].$surname[2]."<br>";


echo substr($name,0,3).substr($surname,0,3)."<br>";
//5


$anAmerican = "An American in Paris";
$anAmerican =str_replace("a", "*", $anAmerican);
$anAmerican = str_replace("A", "*", $anAmerican);
echo $anAmerican."<br>";


//6

$anAmerican = "An American in Paris";
$count =substr_count($anAmerican, "a");
$count =substr_count($anAmerican, "A");
echo $count."<br>";

//7

$anAmerican = "An American in Paris";
$anAmerican = str_replace("a", "", $anAmerican);
$anAmerican = str_replace("A", "", $anAmerican);
$anAmerican = str_replace("e", "", $anAmerican);
$anAmerican = str_replace("i", "", $anAmerican);
echo $anAmerican."<br>";

"An American in Paris";

//8

$text = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $text."<br>";
echo substr($text,-14,1)."<br>";

//9
/*
Suskaičiuoti kiek stringe “Don't Be a Menace to South Central
 While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės.
  Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save
   kvartale”.
*/
$text = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$textArr = explode(' ',$text);
$count = 0;
for ($i=0; $i < count( $textArr ); $i++) { 
   if( strlen($textArr[$i]) <= 5   )
   $count++;
}
echo $count."<br>";

$text2 = "tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$textArr = explode(' ',$text2);
$count = 0;
for ($i=0; $i < count( $textArr ); $i++) { 
   if( mb_strlen($textArr[$i],'UTF-8') <= 5   )
   $count++;
}
echo $count."<br>";





for( $i=0 ; $i < rand(5,15); $i++){
    echo $i;
}

$rnd = rand(1,6);
echo "<h{$rnd}>{$rnd}</{$rnd}h>";

echo "<span>span</span><span>span</span><span>span</span><br>";
echo "<p>p</p><p>p</p><p>p</p><p>p</p><p>p</p>";

$textArr = explode(" ", $text);

for ($i=0; $i < count($textArr); $i++) {
if (strlen($textArr[$i]) <= 5){
    $count ++;
}
}


/*
Parašyti kodą, kuris generuotų atsitiktinį stringą iš 
lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/

$letters = ['a','b','c','d','e','f','g'];

echo   $letters[ rand(0, count($letters)-1)  ]
        .$letters[ rand(0, count($letters)-1)  ]
        .$letters[ rand(0, count($letters)-1)  ];


// 10

$raides = 'abcdefghijklmnopqrstuvwxyz';
$raidesKiek = strlen($raides);
$rand = '';
for($i=0; $i<3; $i++) {
$randsStr .= $raides [rand(0,$raidKiek-1)];
}
Echo $randStr;
?>