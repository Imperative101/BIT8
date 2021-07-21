<?php 
$myName = "Jekaterina";
$mysecondname = "Mazrimaite";
$myyear = "1999";
$year = "2005";

echo "myName = $myName  ";
echo "<br />";
echo " mysecondname = $mysecondname ";
echo "<br />";
echo "myyear = $myyear ";
echo "<br />";
echo "year = $year ";
echo "<br />";

#rand 0-4


$x = 0;
$y = 4;
echo mt_rand($x, $y);
$dal = $x / $y;
echo "result of $x and $y = $dal <br />";
echo(round(0.5) . "<br>");

# tris kintamuosius 
$n1 = rand (0, 25);
$n2 = rand (0, 25);
$n3 = rand (0, 25);
$numbers = $n1+$n2+$n3;
//$middle = array_sum($numbers)/count($numbers);
//echo $middle;

$str = ' ';
$nums = explode(' ', $str);
array_pop($nums);
echo array_sum($nums) / count($nums);

#trikampis
//$base = "base";
//$height = "height";
//if(isset($_POST['submit']))  
//    {   
//$base = $_POST['base'];   
//$height = $_POST['height'];   
//$area = ($base*$height) / 2;   
//echo " ";   





# 0-100

$x = rand (0, 100);
$y = rand (0, 100);
$z = rand (0, 100);
echo mt_rand($x, $y, $z);
$dal = ($x + $y + $z)/3;
echo "result of $x and $y and $z= $dal <br />";


echo(round(1.0) . "<br>");

# 1-6

$x = 1;
$y = 6;
echo mt_rand($x, $y);
$dal = $x / $y;
echo "result of $x and $y = $dal <br />";
echo("h3" . round(0.5) . "<h3>");

#birthdate
#way 1
$from = new DateTime('1999-12-22');
$to   = new DateTime('today');
echo $from->diff($to)->y;

# way3
echo date_diff(date_create('1999-12-22'), date_create('today'))->y;

#way 2

    $dob='1999-12-22';
    $diff = (date('Y') - date('Y',strtotime($dob)));
    echo $diff;

//output 21


#clock


?>