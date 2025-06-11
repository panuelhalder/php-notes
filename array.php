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

/***********************************************************************************/


$student = [

    "Rahim",
    "Lima",
    123,
    "Piya",
    "rakib",
    "noman"

];

var_dump($student);
echo count($student);
echo PHP_EOL;

echo $student[2];
echo PHP_EOL; // ekhne [2 ] eta offset bola hoy; [0] theke suru

//array er sob gulo maan print korar jonno;

$n = count($student);
for($i=0; $i<$n; $i++){
    echo $student[$i]. PHP_EOL;
}

// ulta dik theke print korar jonno;

for($i = $n-1; $i>=0; $i--){
    echo $student[$i]. PHP_EOL;
}


//************************************************************************ */
// array manipularion

$student[2] = "Lipi";

var_dump($student);


// array_shift(); ===> array er first er data ke remove kore return kore 
// array_unshift(); ===> array er first er dike data add kore
// array_push(); ===> array er sesh er  dike data add kore
// array_pop(); ===> array er last data ke remove kore return kore dey


$studentPop = array_pop($student);
$studentShift = array_shift($student);
array_push($student, "Panuel");
array_unshift($student, "Shimul");


echo $studentPop; // ekhane noman ber hoye asche
echo PHP_EOL;

echo $studentShift; // ekhane rahim ber hoye asche
echo PHP_EOL;


var_dump($student);  

//evabeo array er seshe data add kora jay:

$student[] = "new data add to array";

var_dump($student);

// Associative array:

$stuAssociative = [
    '1' => 'One',     // 1= key, one =value
    '2' => 'Two',
    '3' => 'Three'
];

echo $stuAssociative['1'];
echo PHP_EOL;


$food = [
    'vegetables' => 'Brinjal, Tomato, Carrot',
    'fruits'   => 'Orange, Pinapple, Apple'
];

echo count($food);
echo PHP_EOL;

echo $food['fruits'];
echo PHP_EOL;

// array te loop chalano => foreach



foreach($food as $key=>$value){
    echo $key."=".$value. PHP_EOL;
};
echo PHP_EOL;

// associative array te new data add kora

$food['fruits'] = $food['fruits'].", Banana";
foreach($food as $key=>$value){
    echo $key."=".$value. PHP_EOL;
};

// string theke array convert:

$birds = 'Shalik, moyna, tiya';

var_dump($birds);
echo PHP_EOL;

$birds = explode(', ','Shalik, moyna, tiya');
echo count($birds);
echo PHP_EOL;

var_dump($birds);
echo PHP_EOL;

//aray theke string:
$birds = join(', ',$birds);
var_dump($birds);