<?php 

$fruits = ['apple', 'Apple','o'=> 'orange', 'b'=> 'banana', 'Banana', 'plum', 'dates'];
$number = [56, 79, 3, 32, 90, 55, 3, 01, 56];

asort($number); 
print_r($number);


echo PHP_EOL;
sort($number);
print_r($number);

// echo PHP_EOL;
// sort($fruits);  // key preserve kore na, ekbar sort korle value modify hoye jay 'sort/asort' er khetre.
// print_r($fruits);

echo PHP_EOL;
asort($fruits); // key gulo preserve kore
print_r($fruits);


//reverse sort

echo PHP_EOL;
rsort($number); //rsort / arsort
print_r($number);

// "ksort" holo key diye sorting
echo PHP_EOL;
ksort($fruits); // krsort holo reverse
print_r($fruits);

echo PHP_EOL;
sort($fruits, SORT_STRING); //case sensetive
print_r($fruits);

echo PHP_EOL;
sort($fruits, SORT_STRING | SORT_FLAG_CASE); //case insensetive
print_r($fruits);