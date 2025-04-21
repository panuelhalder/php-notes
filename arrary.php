<?php
$carMaker = ["Audi","BMW","Mercedes"];

// Defference between var_dump and print_r

var_dump($carMaker); // Details info

print_r($carMaker); // Short info 

echo count($carMaker); // koyta element ber korar jonno

echo $carMaker[0]; // Array indexing 0 theke suru hoy

$carChoice = ["1st"=>"Audi", "2nd"=>"BMW", "3rd"=>"Mercedes"]; // "key" => "value"
echo "My first choice is $carChoice[first]"; //prothome number suru kore string diye key lekha jabena


$carChoice = ["first"=>"Audi", "second"=>"BMW", "third"=>"Mercedes"];
echo "My first choice is $carChoice[first]";