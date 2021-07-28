<?php 

// cycles
// 1 uzd

for ($x = "*"; $x <= 400;) {
    echo " $x", wordwrap($x,40,"<br>\n");
  }

// 2 uzd

$randomNumber = rand();
$randomNumber = rand(0,300);
echo $randomNumber;
echo array_reduce($array, function($ret, $val) {
    return $ret += $val > 150;
});


if ($v >= 275)
   $color = "#FF0000";
echo "<span style=\"color: $color\">Text</span>";

// 3 uzd

$randomNumber = rand();
$randomNumber = rand(0,300);
echo $randomNumber;


$numbers = range($threethousand, $fourthousand);
foreach ($numbers as $number) {
    echo $number." \n";
}


// 4 uzd

for ($i=1; $i<=10; $i++)  
{  
 for ($j=1; $j<=10; $j++)  
  {  
   echo '* ';  
  }  
   echo "</br>";  
}  

// 6



// 9



for($i=0;$i<=10;$i++){  
    for($k=10;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "*  ";  
    }  
    echo "<br>";  
    }  
    for($i=9;$i>=1;$i--){  
    for($k=10;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "*  ";  
    }  
    echo "<br>";  
    }  

/* 


3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 
iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. 
Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *

5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, 
kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
7. Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui;

8. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

9. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

 Panaudokite***********

10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.


*/

?>