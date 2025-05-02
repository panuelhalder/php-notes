<?php

$n = 19;
$r = $n %2;

switch ($r){
    case 0:
        echo "{$n} is an even number";
        break;
    default:
        echo "$n is an odd number";
}

echo "\n";
/* ****  Tips & Trick  **** */

$string = "8balls";

switch($string){
    case "9balls":
        echo "Nine balls";
        break;
    case 8:
        echo "8";
        break;
    case "8balls":
        echo "eight balls";
        break;
}

