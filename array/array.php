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
// $birds = join(', ',$birds);
// var_dump($birds);



// echo count($birds);
// echo PHP_EOL;

//multidimentional array:

$foods = [
    'vegetables' => explode(', ', 'bringal, brocoli, tomato'),
    'fruts' => explode(', ', 'apple, orange, berry')

];

print_r($foods);
var_dump($foods);

echo $foods['vegetables'][1];
echo PHP_EOL;

//  multidimention er value access  kora:

$sample = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]

];

echo $sample[3][3][1];

echo PHP_EOL;
//associative array to string conversion or data save to string:

$employee = [
    'fname' => 'Jony',
    'lname' => 'mia',
    'age' => 30,
    'sec' => 'HR'
];

print_r($employee);
echo PHP_EOL;

echo $employee['fname']." ".$employee['lname'];
echo PHP_EOL;

printf('%s %s', $employee['fname'],$employee['lname']);
echo PHP_EOL;

$serializesEmployee = serialize($employee); // evabe jekono jaygay save kore rakha jabe
echo $serializesEmployee;
echo PHP_EOL;
// abar string theke data extract kora:
$newEmployee = unserialize($serializesEmployee);

print_r($newEmployee);
echo PHP_EOL;

// JSON = JavaScript object notetion e convert:

$jsondata = json_encode($employee);

echo $jsondata;
echo PHP_EOL;

$jsonDeData = json_decode($jsondata);

print_r($jsonDeData); // php json theke convert er somoy object e convert kore fele. solution nichey:
echo PHP_EOL;

$jsonDeData = json_decode($jsondata, true);

print_r($jsonDeData); // ekhon array asche

//copy by value and copy by reference:

$person = [
    'fname' => 'shimul',
    'lname' => 'halder',
    'age' => 39
];


$deepCopyPerson = $person; //deep copy or copy by value
$deepCopyPerson['fname'] = 'panuel';
echo PHP_EOL;

print_r($person);
print_r($deepCopyPerson); //deep copy or copy by value


$sallowCopyPerson = &$person; //sallow copy or copy by reference
$sallowCopyPerson['age'] = 40;
echo PHP_EOL;

print_r($person);  //dui ta vaiable e change hoise
print_r($sallowCopyPerson); // sallow copy or copy by reference



//data remove from associative array:

echo PHP_EOL;
print_r($person);
unset($person['age']);
echo PHP_EOL;
print_r($person); // age remove hoye gese

echo PHP_EOL;

// empty value caheck with empty()

$example = 0; // value, NULL, 0

if(isset($example)){
    echo "Value is set";
}else{
    echo "Value is not set";
};

echo PHP_EOL;

if(empty($example)){
    echo "It's empty";
}else{
    echo "it's not empty";
};

echo PHP_EOL;

// 0 soho check korte chaile :

if(isset($example) && (is_numeric($example) || $example != '')){
    echo 'Value is set and it\'s not empty';
}else{
    echo 'Value is either not set or it\'s empty';
};


//array theke slice ba katakati kora(array_slice korle main array er data ager motoi thake):

$fruits = [
    'apple',
    'banana',
    'orange',
    'plum',
    'mango',
    'guava',
    'bluebery'
];

$someFruits = array_slice($fruits,2, null,true);
echo PHP_EOL;
print_r($someFruits);


// koyta data nibo setar jonno lenth dite hobe
// $someFruits2 = array_slice($fruits,2,1);
// echo PHP_EOL;
// print_r($someFruits2);

//array er lenth koto hobe mane koto theke koto hobe, -1 mane sesh data, -2 sesh er ager data.

// $someFruits3 = array_slice($fruits,2,-2);
// echo PHP_EOL;
// print_r($someFruits3);

//main array er original key niye asar jonno true dite hoy
// $someFruits4 = array_slice($fruits,2,-2,true);
// echo PHP_EOL;
// print_r($someFruits4);


//main array er data modify kore katakati er sathe add o kora jay
$newFruits = ['Jackfruits', 'pineapple'];
// $someFruits5 = array_splice($fruits,2,-2, $newFruits );
// echo PHP_EOL;
// print_r($someFruits5);
// echo PHP_EOL;
// print_r($fruits);


//array ke add kora:
echo PHP_EOL;
$newFruitsPlus = $newFruits + $someFruits; // evabe add korte chaile obossoi offset rakhte hobe ba key preserve korte hobe null, true diye

print_r($newFruitsPlus);

echo PHP_EOL;
$newFruitsMerge = array_merge($newFruits,$someFruits);

print_r($newFruitsMerge);