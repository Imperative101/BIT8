<?php

include('./Plant.php');
$plant = new Plant();
print_r($plant);
echo "<br>";
$plant->name="Agurkas";
$plant->is_yearling=true;
$plant->is_tasty=true;
print_R($plant);
echo "<br>";
echo "<hr>";

$plant2 = new Plant("slyva",true);
print_r($plant2);
$plant->intro();
$plant2->intro;

include('./Math.php');
echo Math::sum(14,24);
Plant::classDescription();
$plant->classDescription();

echo "<br>";
?>