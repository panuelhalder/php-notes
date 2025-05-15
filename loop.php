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
  
// ******Facctorial: like !5 = 5*4*3*2*1
$f = 5;
$factorial =1;
for($i =$f; $i>1; $i--){  // jer maan ber kora lagbe, seta holo $f, ar $f er maan $i e assign  korte hobe, maane $f er maan theke loop suru hobe. ar factorial 1 theke suru hobe. factorial totokhon cholbe 1 theke jotokhon boro thakbe, karon 2 er factorial 1*1 = 1. seijonno 1 er boro
    $factorial = $factorial * $i;
}

echo $factorial;
echo PHP_EOL;
printf("Factorial of %d is %d",$f,$factorial);


//*** jesob sonkha 7 diye vag jay segulo 1oo porjonto ber koro:

for($p=0; $p<100; $p++){
    
    if($p % 7 == 0) echo $p . PHP_EOL;
    
}

echo "===========";
echo PHP_EOL;

// *** While loop er TIPS:

$w = 0;
while($w < 5){
    echo $w;
    echo PHP_EOL;
    $w++;
}

echo "===========";
echo PHP_EOL;

$w=0;
while($w++ < 5){
    echo $w;
    echo PHP_EOL;
    
}

echo "===========";
echo PHP_EOL;

$w=0;
while(++$w < 5){
    echo $w;
    echo PHP_EOL;
    
}



echo "===========";
echo PHP_EOL;

 
// break in loop:

for($r=20; $r<50; $r++){
    if($r%13 == 0){
        echo $r;
        echo PHP_EOL;
        break;      // ekhane prothon condition fill korle  loop theme jabe, loop theke ber hoye jabe. ar run korbe na
    }
}

echo "===========";
echo PHP_EOL;

for($r=20; $r<50; $r++){
    if($r%13 == 0){
        break;      // ekhane first condition er agey porjonto print hobe tarpor aar print hobe na
    }echo $r;
    echo PHP_EOL;
}

echo "===========";
echo PHP_EOL;

for($r=20; $r<50; $r++){
    if($r%13 == 0){
        continue;          // ekhane 26 ar 39 bade sob print hobe
    }echo $r;
     echo PHP_EOL;
}

echo "===========";
echo PHP_EOL;


for($r=20; $r<50; $r++){
    if($r%13 == 0){
        echo $r;
        echo PHP_EOL;  
        continue;          
    }
}


echo "=================";
echo PHP_EOL;

// Fibonacci series: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34 ......

$firstNum = 0;
$secNum = 1;

for($i=0; $i<10; $i++){

    echo $firstNum ." ";
        $fibo = $firstNum + $secNum;
        $firstNum = $secNum;
        $secNum = $fibo;

};

