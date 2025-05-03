<?php

// **** for loop ***

for ($i=0; $i<=10; $i++){  //$i++ or $i+=1
    echo $i;
    echo PHP_EOL; //EOL = End Of the Line or next line
}

echo PHP_EOL;


// **** while loop ***

$i = 0;
while($i<=10){
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo PHP_EOL;

// *** do while loop ***

do{
    echo $i;
    $i++;
}while($i<=10);


echo PHP_EOL;

for($n=1; $n<=20; $n+=2){
    echo $n;
    echo PHP_EOL;
}

// *** PHP pattern or PHP nested loop:

for($n=1; $n<=5; $n++){     
    // echo "*".PHP_EOL;
    for($p=0; $p<$n; $p++){
        echo "*";
    }
    echo PHP_EOL;

}

// 10 to 1 print: multiple steping

for($i = 10, $j = 0; $i > 0, $j < 10; $i--, $j++){
    echo $i .":".$j;
    echo PHP_EOL;
}
  
// Facctorial: like 5 = 5*4*3*2*1
