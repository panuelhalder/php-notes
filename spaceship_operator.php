<?php

/* ***<=>  Spaceship operator*** 
    x <=> y;
    x jodi y er cheye boro hoy tahole 1 return hobe
    x jodi y er cheye choto hoy tahole -1 return hobe
    x jodi y er soman hoy tahole 0 return hobe
    


*/

$x = 5;
$y = 5;

function greaterOrSmaller($x, $y){
    if ($x>$y){
        return 1;
    }else if($x==$y){
        return 0;
    }else return  -1;
}; 

// OR  $x <=> $y;


if (greaterOrSmaller($x,$y)==1){
    echo "{$x} is greater than {$y}";
}elseif (greaterOrSmaller($x,$y)==0){
    echo "{$x} is equal to {$y}";
}else {
    echo "{$x} is smaller than {$y}";
};

echo PHP_EOL;

// Spaceship operator diye onek choto kore lekha jay

$result = $x <=> $y;

var_dump($x<=>$y);
echo PHP_EOL;

if($result == 1){
    echo "{$x} is greater than {$y}";
}elseif($result == 0){
    echo "{$x} is equal to {$y}";
}else {
    echo "{$x} is smaller than {$y}";
}

