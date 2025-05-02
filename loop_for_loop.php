<?php
for ($i=0; $i<=10; $i++){  //$i++ or $i+=1
    echo $i;
    echo PHP_EOL; //EOL = End Of the Line or next line
}


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