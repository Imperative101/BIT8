<?php 

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


?>