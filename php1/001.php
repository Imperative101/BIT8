<?php 
/* 1 uzd */
$str1 = "Jennifer";
$str2 = "Coolidge";

echo substr_count($str1, "is" , 8);
echo substr_count($str2, "is" , 8);

/* 2 uzd */

$input_str = "Jennifer";
$result_str = strtolower($input_str); //uppercase
echo $result_str;

$input_str = "Coolidge";
$result_str = lcfirst($input_str); //lowercase
echo $result_str;

/* 3 uzd   Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti. */

$str1 = "Roman";
$str2 = "Briggs";
$str3 = "Hobbs";
/* nezinau kaip sujungti*/



/* 4 uzd */


/* 5 uzd */


$new = htmlspecialchars("<a>An American in Paris</a>", ENT_QUOTES);
echo $new; 



$str = 'An American in Paris!';
$pattern = 'a';
echo preg_replace($pattern, '*', $str);


/* 6 uzd */

$string = "An American in Paris!"; 
echo 'output is :- '.substr_count($string,"php");


/* 7 uzd */


/* 8 uzd */


/* 9 uzd */

echo str_word_count("Don't Be a Menace to South Central While Drinking Your Juice in the Hood");

$string1="Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2="Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
if(!preg_match_all("/\b[a-zA-Z0-9]{4,}\b/", $string1))
{
    echo "Should be allowed";
}

echo str_word_count("Don't Be a Menace to South Central While Drinking Your Juice in the Hood" && "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale");

/* 10 uzd */

$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789!@#$%^&*()'); 
shuffle($seed); 
$rand = '';
foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];

?>