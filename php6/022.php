<?php

//file_get_contents();
//file_Put_contents();

//json_Decode();
//json_encode();


$arr = ["key"=>"value", "name" => "peters"];
print_r($arr);
echo"<br>";
echo json_encode($arr)."<br>";

file_put_contents("./data.txt", json_Encode($arr));

echo file_get_contents("./data.txt");
echo "<br>";

$data = json_decode( file_get_contents("./data.txt"),1);
print_R($data);
/////////////
//id manufacturer 
//model year color distance fuel

$data =json_decode(file_get_contents("./data.txt"),1);
print_r($data);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>