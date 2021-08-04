<?php 

///// sprendimai 08.02.2021


//    foreach ($array4 as $value) {
//        if($count%2==0) {
//            $even[]=$value;
//            $count++;
 //       } else {
//            $odd[]=$value;
//            $count++;
//        }
//    }

//    echo "<br> Lyg Masyvas: ";
//    print_r($even4);

	
//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
//	Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
	$masyvas1= array(0,1,2,3,4,5,6,7,8,9);
    for($i=0; $i < 10; $i++) {
        $masyvas1[$i] = rand(5,25);
        $rand_keys = array_rand($input, 0,2);
    }
    echo"<br>";
    echo $input[$rand_keys[0]] . "\n";
    echo $input[$rand_keys[1]] . "\n";




	

?>