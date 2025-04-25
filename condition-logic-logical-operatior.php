<?php

/*
=   // assign
==  // equal
!=  // not equal
>   // greater than
<   // smaller than
>=  // greater than equal to
<=  // smaller than equal to
*/

$n = 13;

if($n %2 == 0){
    echo "$n is even number" . "\n";
}else{
    echo "$n is odd number" . "\n";
};



if($n > 10){
    echo "$n is greater is than 10" . "\n";
}else{
    echo "$n is smaller than 10" . "\n";
}


/* if else condition er rules onujai, jodi 1ta condition true hoy tahole porer condition gula ar check hobe na; */

$rahim = 400;
$karim = 100;

if($rahim == $karim){
    echo "they have same amount";
}elseif($rahim <= $karim){
    echo "Rahim has smaller or equal amount than karim ";
}else{
    echo "They have different amount";
}
echo "\n";

/*Uses of && with Age  */

$age = 5;

if($age >= 13 && $age <= 19){ // && = and
    echo "He/she is a teen";
}elseif($age < 13){
    echo "He/she is a child";
}else{
    echo "He/she is an adult";
}
echo "\n";

/*Uses of || Double pipe = Or. with Age  */

$food = "Salmon";

if($food == "tuna" || $food == "Salmon"){
    echo "{$food} contains vitamin-D"; // variable {} er vitor use kore o dekhano jay "this" ba "it" na use kore
}else {
    echo "We don't know if {$food} contains vitamin-D";
}

echo "\n";


/****** Leap Year Function   *******/

/* Leap year rules

// Divisible by 4
// Not divisible by 100
// Divisible by 400 (for century year)

*/

$year = "2024";

if($year %4 == 0 && ($year %100 != 0 || $year %400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}

echo "\n";


/*** Nested condition & logic ***/

$username = "abcd";
$password = "124";

if($username == "abcd"){
    if($password == "1234"){
        echo "Hello user";
    }else {
        echo "invalid password";
    }
}else {
    echo "invalid username";
}

echo "\n";

/*** Nested condition & logic - another way ***/

if($username == "abcd" && $password == "1234"){
    echo "Hello User";
}elseif($username != "abcd" && $password == "1234"){
    echo "Invalid username";
}elseif($username == "abcd" && $password != "1234"){
    echo "Invalid password";
}