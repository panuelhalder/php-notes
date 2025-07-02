<?php

$fruits = ['apple', 'Apple','o'=> 'orange', 'b'=> 'banana', 'Banana', 'plum', 'dates'];
$number = [56, 79, 3, 32, 90, 55, 3, "01", 56];


// loose Mode
if(in_array("orange", $fruits)){
    echo "Orange is found";
}else{
    echo "Not found";
}


echo PHP_EOL;

//Data type soho search korar jonno, jemon integer: Strict Mode
if(in_array(01,$number, true)){
    echo "01 is found";
};

//koto number offset ba key te ache?
$offset = array_search(56,$number);
echo PHP_EOL;
echo $offset; // prothom data ta khuje ber korbe

//key search korar jonno:
if(key_exists('o',$fruits)){
    echo PHP_EOL;
    echo " o key exist";

}