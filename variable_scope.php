<?php

// global scope:

$name = "Earth";

// function doSomething(){
//     global $name; // glonal na likhle $name er maan show korbe na, karon $name function er vitore declare kora hoy nai. Ei jonno global lokhte hoy, tokhon se function er baire $name er maan ke khujbe || evabeo lekha jay $GLOBALS['name'] eta super global

//     $GLOBALS['name'];
//     echo $name; 
// };


// doSomething();

//+++++++++++++++++++++++++++++++++++++++

//Local scope:

function runSomthing(){
   global $name2;
   $name2 = "Earth2"; //local scope function er
}
runSomthing(); // function run na korle baiire echo hobe na $name2

echo $name2;

echo PHP_EOL;

//++++++++++++++++++++++++++++++++++++

//static scope:

function doExtra(){
    static $i; // $i er maan ei function er jonno save kore rakhbe. ei line comment kore run kore dekhte hobe
    $i = $i ?? 0; //null coales
    $i++;

    echo $i;
}

doExtra();
echo PHP_EOL;
doExtra();
echo PHP_EOL;
doExtra();
echo PHP_EOL;
doExtra();
echo PHP_EOL;

