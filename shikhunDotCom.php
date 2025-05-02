<?php
define ('PI','3.1416');

echo PI;


$number1 = 2;
$number2 = 3;

echo $number1 ** $number2; // ** = power square/cube etc.

echo '<br>';

echo $number2 % $number1;

$name = 'Shimul';


echo '<br>', $name;

$name .= ' Halder'; //concatinaltion | '=' assingment operator

echo '<br>', $name;

echo '<br>';

var_dump(10>5);

echo '<br/>';

var_dump(10<5); // <, > comparison operatior

echo '<br/>';

var_dump(10 == '10');


echo '<br/>';

var_dump(10 === '10');

echo '<br/>';

$day = 'Thursday';

if($day === 'Friday' || $day === 'Saturday'){
    echo 'Today is holiday';

}elseif($day === 'Thursday'){
    echo 'Today is half holiday day';
}else{
    echo 'Today is full working day';
}

$array_d = ['Selim', 'Shimul', 13, 4.5];

echo '<br/>', $array_d[0], '<br/>';

$shimul_details = [
    'first_name' => 'Shimul',
    'last_name' => 'Halder',
    'age' => '38'
];

echo $shimul_details['age'], '<br/>';

$multidimentional_array = [
    'name' => 'Shimul',
    'address' => [
        'house_no' => '45/a',
        'vill' => 'Akran',
        'city' => 'Dhaka'
    ]
    ];

echo $multidimentional_array['address']['city'];

echo '<br/>';

// $i = 1;
// while($i <= 10){
//     echo $i . 'x5=' . $i*5 . '<br/>';
//     $i++;
// }


// do{ echo $i . 'x5=' . $i*5 . '<br/>';
//     $i++;

// }while($i <= 10);


// for($i = 1; $i <= 10; $i++){
//     echo $i . 'x5=' . $i*5 . '<br/>' ;
// }


$array = [
    'selim' => 1,2,3,4,'rocky'=>5,6,7,8,9
];

foreach($array as $key => $value){
    echo $value .'x5='. $value*5 . '<br/>';
}


