<?php
function evenOrOdd($n){      //($n) this is parameter
    if($n %2 == 0){
        return true;
    }
    return false;
}  


$n = 12;

if(evenOrOdd($n)){
    echo "{$n} is an even number";
}else "{$n} is an odd number";