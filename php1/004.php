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
for ($i=0; $i < 300; i++) {
    $num = rand(0,300);
    if ($num > 275) {
        echo '<span style="color:red;">'.$num."</span>";
    } else {
        echo"<span class="redNum">".$num."</span>";
    }
    echo "<span>" $num ."</span>"; // span - atskiras elementas

    if($num > 150) {
        $count++; /// padidinti vienetui
    }
}

echo "<br>didesniu ux 150 - ".$count."<hr>";
// 4

for($i=0; $i < rand(3000,4000); $i++77) {

echo $i. ",";

}

$count++;
if ($count==1) {
    echo str_repeat('&nbsp', 1).$i;
    continue;
}
echo','$i;
}
// or

$text = "";
for ($i=77; $i < rand(3000,4000); $i+=77 ) {
    $text .= $i ",";
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

//10




?>