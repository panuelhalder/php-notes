<?php

// function er subidha hocche eki kaj bar bar na kore ek jaygay likhe seta ke re-use kora. ei process ta ke (encapsulation = kono kichu hide kore kaj kora) bola jay. Mane User ra function na use korbe kintu function er code ta hide kora thakbe. 

// hide korar jonno alada folder b file eo function er code gulo likhe rekhe kaj call kora jay (include_once diye.) nicher code gulo onno folder theke call kora holo

include_once "functions_folder/functions.php";

/*
function evenOrOdd($n){      //($n) this is parameter
    if($n %2 == 0){
        return true;
    }
    return false; // function e ekbar return lekha hole, pore ar code run korbe na . tai ekhane else if er jaygay return false lekha hoise
}  
*/

$x = 11;

if(evenOrOdd($x)){  //($x) this a argument(x) pass kora
    echo "{$x} is an even number";
}else {
        echo "{$x} is an odd number";
}

// ekhane meaning full naam deya uchit, jemon ekhane evenOrOdd er poriborte isEven lekha jay.