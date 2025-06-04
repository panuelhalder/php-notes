<?php

function evenOrOdd($n){      //($n) this is parameter
    if($n %2 == 0){
        return true;
    }
    return false; // function e ekbar return lekha hole, pore ar code run korbe na . tai ekhane else if er jaygay return false lekha hoise
}  



//fatorial with functions:

function factorial(int $n){
    // if(gettype($n)!="integer"){
    //     return "invalid";      // for under php 7 version;
    // }
    $result = 1;
    for ($i =$n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

// Robot demo:

function robot($foodType = "coffe", $numberOfItems = "1 cup"){    // default value = diye likhte hoy. ar deault value dile sob gulote dite hobe , shudhu ekta te deya zabena
    echo "{$numberOfItems} of {$foodType} has been served";
};

function sum($x=0, $y=0, $z=0):int {    // ":int" diye return value nirdisto kore deya jay, aba variable er agey o deya jay "int $x" eivabe
    return $x+$y+$z;
}

function sumUnlimit(int ...$numbers):int{
    $result = 0;
    for($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;

}

// Boro function er khetre stake choto choto function e vag korte hobe

// function doTheLargerTask(){
//     echo "Step A done";
//     echo PHP_EOL;
//     echo "Step B done";
//     echo PHP_EOL;
//     echo "Step C done";
//     echo PHP_EOL;
//     echo "Step D done";
//     echo PHP_EOL;
// }

//evae likha jay:
    function doTaskA(){
        echo "Step A done";
        echo PHP_EOL;
    }
    function doTaskAB(){
        echo "Step AB done";
        echo PHP_EOL;
    } 
    function doTaskC(){
        echo "Step C done";
        echo PHP_EOL;
    } 
    function doTaskD(){
        echo "Step D done";
        echo PHP_EOL;
    } 
    
    function doTheLargerTask(){
        doTaskA();
        doTaskB();
        doTaskC();
        doTask();
    }