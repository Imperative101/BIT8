<style>

    .text1 {

        overflow-wrap: break-word;
    }

    .redNum {
        color: red;
        font-weight: 900;
    }
    .sq {
        display:inline-block;
        line-height:40%;
    }
    .red {
        color:red;
    }
</style>

<?php 
// use lighthouse google
/// 1 uzd
//3. cycles
// css prevent text wrap

echo "<div class=\"text1\>";
for ($i=0; $i < 400; $i++) {
    echo "*";
}

echo "</div>";



for ($i=0; $i < 401; $i++) {
    echo "*";
    if($i % 50==0) {
        echo "<br>";
    }
}

// 3

$count = 0;
for ($i=0; $i < 300; $i++) {
    $num = rand(0,300);
    if ($num > 275) {
        echo '<span style="color:red;">'.$num."</span>";
    } else {
        echo'<span class="redNum">'.$num." </span>";
    } 
    echo "<span>".$num ."</span>"; 

    if($num > 150) {
        $count++; /// padidinti vienetui
    }
}

echo "<br>didesniu uz 150 - ".$count."<hr>";

// 4

for($i=0; $i < rand(3000,4000); $i+=77) {

echo $i. ",";

}

$count++;
if ($count==1) {
    echo str_repeat('&nbsp', 1).$i;
    continue;
}
echo','.$i;

// or

$text = "";
for ($i=77; $i < rand(3000,4000); $i+=77 ) {
    $text .= $i. ",";
}
echo substr($text,0,-2);

//5

//for ($i=0; $i < 300; i++) {
//for ($a=0;$a < 100; $a++) {
//    if(true {
//        echo "<div class=\"sq\">*</div>"; 
//    }else{
//   echo "<div class=\"sq\">*</div>";
//}
//echo "<br>";
//}


for($i=0; $i < 50; $i++) {
    for ($a=0; $a < 50; $a++) {
        if($i == $a) {
            echo "<div class=\"sq\">*</div>";
        }else {
            echo "<div class=\"sq\">*</div>";
        }
    }
    echo"<br>";
}

// or

for ($i=0; $i < 50; $i++) { 
    for ($a=0; $a < 50; $a++) { 
        if($i == $a){
            echo "<div class=\"sq red\">*</div>";
        }elseif(50  - $i - 1 == $a){
            echo "<div class=\"sq red\">*</div>";
        }
        else{
            echo "<div class=\"sq\">*</div>";
        }
    }
    echo "<br>";
}

// rombas

for($x = 0; $x < 21; $x++) {
    for ($y=0; $y < $x; $y++){
        if ($y < 21 - $x) {
            echo '&nbsp';
        } else {
            echo '<span style="color:rgb('.rand(0,225).','.rand(0,225).','.rand(0,225).'">'.'*'.'</span>';
        }
    }
    echo "\n";
}
for($x = 21; $x > 0; $x--){
    for ($y = 0; $y < $x; $y++){
        if ($y < 21 - $x) {
            echo '&nbsp';
        } else {
            echo '<span style="color:rgb('.rand(0,225).','.rand(0,225).','.rand(0,225).'">'.'*'.'</span>';
        }
    }
    echo"\n";
}
echo'</pre>';

//6

// devinta uzduotis

$sak1 = "Don't be a memance to south central while drinking your juice in the hood";
$sak2 = "tik nereikia gasdinti pietu centro, geriant sultis par save kvadrate";
$zod = str_replace("'","", $sak1);
$zod = (str_word_count($sak, 1, 'UTF-8'));
$zod2 = str_replace("'","", $sak2);
$zod2 = (str_word_count($sak2, 1, 'aceisuz'));
$i=0; 
$j=0; 
foreach($zod as $target){
    if(mb_strlen($target, 'UTF-8')<=5) {
        $i++;
    }
}
foreach($zod2 as $target){
    if(mb_strlen($target, 'UTF-8')<=5) {
        $j++;
    }
}
echo 'Penkiu ar maziau raidziu raidziu sakinyje" '.$sak1.'" yra: '.$i;
echo 'Penkiu ar maziau raidziu raidziu sakinyje" '.$sak2.'" yra: '.$j;

$sh=null;
$msh=null;
$countas=0;
$yta=false;

$a=null;
while ($yra==false) {
    $countas++;
    $rnd=rand(0,1);
    if($rnd==0) {
        $sh="H";
    } else {
        $sh="s";
    }
}
$msh=$msh .$sh;
for ($i=0;$i<$strlen($msh);$i++) {
    $a=substr($smh,$i,1);
    if($a=="H") {
        $yra=true;
    }
}
echo $msh ."<br>";
echo "pirmas herbas iskrito metant" .$countas. "karta."."<br>";

///////////////


echo '<pre style="line-height: 50%; font-size: 200%">';
            // Viršutinė pusė
            for($x = 0; $x < 21; $x++){
                for ($y=0; $y < $x; $y++){
                    if ($y < 21 - $x){
                        echo '&nbsp';
                    }else {
                        
                        echo '<span style="color:rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).'" >'.'*'.'</span>';
                    }
                }
            echo "\n";
            } 
            // Apatinė pusė
            for($x = 21; $x > 0; $x--){
                for ($y = 0; $y < $x; $y++){
                    if ($y < 21 - $x){
                        echo '&nbsp';
                    }else {
                        echo '<span style="color:rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).'" >'.'*'.'</span>';
                    }
                }
            echo "\n";
            }         
            echo '</pre>';

?>