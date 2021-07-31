<?php
echo "Hello PHP World!";

// Three statements, all with their own ;
echo "Bob";
echo "John";
$var1 = "Hi";

$my_var = "cat";
echo "There is one $my_var on the mat";
/* If there were three cats, then you can type: */
echo "There are three {$my_var}s on the mat ";


$var1 = 5 + 6 / 2;
echo $var1;
// Output: 8

$string_array = ["first element", "second element"];
$string_array[] = "third element";
// $string_array is now:  ["first element", "second element", "third element"]


$array_of_integers = array(3, 2, 1);
$array_of_strings = ["one", "2", "twenty"];
$array_of_mixed_content = ["two", 0, 1.0];
echo $array_of_integers[0]; // 3
echo $array_of_strings[2]; // "twenty"
echo $array_of_mixed_content[1] // 0



//$array_of_arrays = ["a", "Not that lucky", 2, ["smoke detectors", "d", ["boring street in", "U.S."], "nothing happens"], "."];
//echo $array_of_arrays[3][2][1] //Returns "U.S."
//$array_of_arrays[3][2][1] = "America"; // "U.S." changed to "America"
//echo $array_of_arrays[3][2][1] //Returns "America"


/*
$suit_up = ["top hat", "&", "tails"];
echo $suit_up[0]; // top hat
 
$index_value = 2;
$odd_choices = [99, "red", "balloons"];
echo $odd_choices[$index_value]; // balloons


$num_array = [1, 2, 3];
$num_array[1] = 4; // Reassign value of second element
echo $num_array[1]; // Prints: 4


$nums = ["2" => 2,"4" => 3, "6" => 6];
echo $nums["2"]; // Accesses value and Prints: 2
$nums["8"] = 8;  // Adds new value 8
echo $nums["8"]; // Prints: 8
$nums["4"] = 4;  // Changes value of key "4"
echo $nums["4"]; // Prints: 4


associative arrays

$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
echo $num_array[1000]; // Prints: one thousand
 
$ordered = [99, 1, 7, 8];
$ordered["special"] = "Cool!";
echo $ordered[3]; // Prints: 8
echo $ordered["special"]; // Prints: Cool!
 
$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";
echo $num_array[1001]; // Prints: New Element in $num_array
 
$animals_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
array_push($animals_array, "New Element in \$animals_array");
echo $animals_array[0]; // Prints: New Element in $animals_array

*/

/*$is_true = TRUE;
$is_false = FALSE;
 
echo gettype($is_true); 
// Prints: boolean
echo gettype($is_false); 
// Prints: boolean



if (TRUE){
    echo "TRUE is always true"; 
  }
   
  $condition1 = TRUE;
  if ($condition1) {
    // This code block will execute
  }
   
  $condition2 = FALSE;
  if ($condition2) {
    // This code block will not execute
  }



  
$fav_fruit = "orange";
 
if ($fav_fruit === "banana"){
  echo "Enjoy the banana!";
} elseif ($fav_fruit === "apple"){
  echo "Enjoy the apple!";
} elseif ($fav_fruit === "orange"){
  echo "Enjoy the orange!";
} else {
  echo "Enjoy the fruit!";
}
// Prints: Enjoy the orange!


switch ($letter_grade){
  case "A":
    echo "Terrific";
    break;
  case "B":
    echo "Good";
    break;
  case "C":
    echo "Fair";
    break;
  case "D":
    echo "Needs Improvement";
    break;
  case "F":
    echo "See me!";
    break;
  default:
    echo "Invalid grade";
}


// Without ternary
$isClicked = FALSE;
if ($isClicked) {
  $link_color = "purple";
} else {
  $link_color = "blue";
}
// $link_color = "blue";
 
 
// With ternary
$isClicked = FALSE;
$link_color = $isClicked ? "purple" : "blue";
//  $link_color = "blue";



if ("What's going on?"){   // evaluates to TRUE
  echo "Let us explain…";
} 
// Prints: Let us explain…



$num = 5;
// nested conditional
if ($num > 0){
    echo 'The number is positive. <br>';
      if ($num % 2 === 0){
            echo 'The number is even.';
      }
} else {
      echo 'The number is negative.';
}


TRUE || TRUE;   // Evaluates to: TRUE
FALSE || TRUE;  // Evaluates to: TRUE
TRUE && TRUE;    // Evaluates to: TRUE
FALSE && TRUE;   // Evaluates to: FALSE
!TRUE;    // Evaluates to: FALSE
!FALSE;   // Evaluates to: TRUE
TRUE xor TRUE;   // Evaluates to: FALSE
FALSE xor TRUE;  // Evaluates to: TRUE


TRUE && TRUE;    // Evaluates to: TRUE
FALSE && TRUE;   // Evaluates to: FALSE
TRUE && FALSE;   // Evaluates to: FALSE
FALSE && FALSE;  // Evaluates to: FALSE
 
$passingGrades = TRUE;
$extracurriculars = TRUE;
if ($passingGrades && $extracurriculars){
  echo "You meet the graduation requirements.";
}
// Prints: You meet the graduation requirements.

LOOPS

$count = 1;
while ($count < 10)
{
  echo "The count is: " . $count . "\n";
  if ($count === 4) {
    break;
  }
  $count += 1;
}



// This loop counts from 0 to 100
$count = 0;
do {
  echo "The count is: " . $count . "\n";
  $count += 1;
} while ($count <= 100);


do {
    #code block
} while (conditional);


    
// This for loop counts from 1 to 50
for ($count = 1; $count < 51; $count++)
{
  echo "The count is: " . $count . "\n";
}


for (#expression 1; #expression 2; #expression 3)
{
  # code block
}



while (conditional) {
  #code block
}


// This while loop counts from 0 to 100
$count = 0;
while ($count <= 100)
{
  echo "The count is: " . $count . "\n";
  $count += 1;
}


// This foreach loop counts from 1 to 5
$nums = [1, 2, 3, 4, 5];
foreach ($nums as $num) {
  echo "The num is: " . $num . "\n";
}


foreach ($array as $value) {
  #code block
}


foreach ($array as $key => $value) {
  #code block
}

// This code counts from 1 to 10 but skips over 5
$count = 1;
while ($count < 11)
{
  if ($count === 5) {
    $count += 1;
    continue;
  }
  echo "The count is: " . $count . "\n";
  $count += 1;
}



CLASSES AND OBJECTS


// constructor with no arguments:
class Person {
  public $favorite_color;
  function __construct() {
    $this->favorite_color = "blue";
  }
}
 
// constructor with arguments:
class Person {
  public $favorite_color;
  function __construct($color) {
    $this->favorite_color = $color;
  }
}

// Test class 
class Test {
  public $color = "blue";
  protected $shape = "sphere";
  private $quantity = 10;
  public static $number = 42;
  public static function returnHello() {
    return "Hello";
  }
}
 
// instantiate new object
$object = new Test();
 
// only color can be accessed from the instance
echo $object->color; # Works
echo $object->shape; # Fails
echo $object->quantity; # Fails
echo $object->number; # Fails
 
// we use the static class to access number
echo Test::$number;

*/

?>