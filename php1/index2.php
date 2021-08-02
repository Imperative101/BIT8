<?php 
$array = [];

for ($i=0; $i<101; $i++) {
    if($array[$i] % $arra("10","20","30","40","50","60","70","80","90","100")) {
        $arra[$i] = ["A"];    
    } else {
        $arrb = ["B"];
    }    
  }
print_r($array);


$array2 = [];
$array3 = [];
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10 ; $j++){
        $elie2[] = rand(3,10);
        $elie3[] = rand(3,10);
    }
    foreach ($array2 as $key => $value) {
        $elie2[] = $arra['A'];
        $elie3[] = $arrb['B'];
      }
      $required_array = array($eile2, $eile3);

}

echo "<br>";
print_r($elie2);
echo "<br>";
print_r($elie3);



?>