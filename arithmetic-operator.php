<?php
$number = 12;
$number = $number + 13;

echo $number ;
echo "\n"; // "\n" shudhu ekane kaj korbe, real server e kaj korbena

// Evabeo lekha jay
$number += 23; // ($number = $number + 23)

echo $number . "\n";

$number + 10; // evabe lekhle eta kothao return hobe na, tai jekono variable e assign ba return korte hobe

echo $number . "\n"; // assign kora hoy nai tai 10 add hoynai

$number2 = $number + 10;

echo $number2, "\n"; // ekhon 10 add hoiche, karon eta $number2 te return kora hoice


// Multiplication:

echo $number * $number2 , "\n";

// DIvision:

echo $number, "\n";
echo $number2, "\n";

echo $number2 / $number, "\n";

//Modulas-vagshes:

echo $number2 % $number, "\n" ;

$number2 = (32-2) / (5+5); // Total ta hocche Operation; +,- eigula holo operator; ar 32 2 5 eigula holo operand

echo $number2 , "\n";


$number++; // $number += or $number = $number + 1;
$number--; // $number -= or $number = $number - 1;


// ek sathe onk gula variable assign kora:

$x = $y = $z = 4;

echo $x , "\n";
echo $y , "\n";
echo $z , "\n";

// evabeo ek sathe variable assign kora jay:

$x = 2;

$y = $z = $x;

echo $z, "\n";


// ****nicher echo ki hote pare? 

$m = 2;
$n = $m++;

echo $m, "\n", $n, "\n"; // $m =2 ebon $n = 3 houar kotha;
/* PHP ekhane eivabe assign kore:
    //$n = $m++;
    $n = $m; // agey m er maan n e chole jabe tarpor m barbe
    $m = $m + 1; 
*/

// **** abar emon jodi hoy:
$m = 2;
$n = ++$m;

echo $m, "\n", $n, "\n";
/* PHP ekhane eivabe assign kore:
    //$n = ++$m;
    $m = $m + 1; agey m barbe tarpor m er maan n e jabe;
    $n = $m; 
*/


