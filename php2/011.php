<?php

//functions

// function message() {
//     echo "Siandien grazi diena!";
//   }
//   message(); // call the function

//   sayHi();
//   sq();
//   function  sayHi(){ 
//       echo "<h1>Siandien grazi diena" ."</h1>". "<br>"; 
//   }
//   function sq($a=0){
//       echo $a * $a . "<br>";
//   }


// //Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; //

// function echoText($text){
//     echo $text;
// }
// $text2 = echoText("Text");
// echo "<h1>$text2</h1><br><h2>$text</h2><h3>$text</h3>";

// //Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, 
// //o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

// function tagnumber($text, $number) {
//     echo "<h1>$text </h1> Refsnes. is <h1>$number </h1><br>";
//   }
  
//   tagnumber("tekstas","1");
//   tagnumber("tekstas","2");
//   tagnumber("tekstas","3");
//   tagnumber("tekstas","4");
//   tagnumber("tekstas","5");
//   tagnumber("tekstas","6");


// //Generuokite atsitiktinį stringą, pasinaudodami kodu 
// //md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
// function random($str) {
//     echo md5(time($str));
//   }
//   random($str); // call the function


// //Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
// //


// function dalyba($x, $y)
// {
//     $date = strtotime($x);
//     $y = date('d', $y);

//     if ($x % 2 === 0) {
//         print "even";
//     } else {
//         print "odd";
//     }
// }

// echo dalyba($x, $y) . "<br>" ;




// //Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
// //Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

// $rndNums = [];
// for ($i=0; $i < 100; $i++) { 
//     $rndNums[$i] = rand(33,77);
//  }
//  print_r($rndNums);
//  echo "<br>";

//  function del($rndNums)
//  {
//  //    $date = strtotime($rndNums, $z);
//  //    $y = date('d', $z);
 
//      if ($rndNums % 2 === 0) {
//          print "even";
//      } else {
//          print "odd";
//      }
//  }
 
//  //echo dalyba($) . "<br>" ;


// //
// //Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

// $masyv = [];
// for ($i=0; $i < 100; $i++) { 
//     $masyv[$i] = rand(333,777);
//  }
//  print_r($rndNums);
//  echo "<br>";

//
//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
//
//Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
//
//Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
//
//Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite 




?>