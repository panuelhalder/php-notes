<?php

// Ternay operator

$n = 5;
// if($n = 12){
//     echo "Twelve";
// }elseif($n = 10){
//     echo "Ten";
// }else {
//     echo "A number";
// }

echo "\n";

$numberCheck = ($n ==12)? "twelve" : ((($n == 10)? "Ten" : ($n == 5))? "FIve" : "A number");
echo $numberCheck;

echo " \n";

$numberEvenOdd = ($n % 2 == 0) ? "{$n} is an  Even Nummber" : " {$n} is a Odd number";
echo $numberEvenOdd;