<?php

$name = "Earth";
var_dump($name);
echo "<br/>";


$age = 12;
var_dump($age);
echo "<br/>";

$age = null;
var_dump($age);
echo "<br/>";

$age = "";
var_dump($age);
echo "<br/>";

$result = true;
var_dump($result);
echo "<br/>";


echo "We are living on the {$name}";
printf ("We are living on the %s", $name); // %s = String value

$firstName = "Isaac";
$lastName = "Newton";
printf("His fist name is %s, and last name is %s", strtoupper($firstName),strrev($lastName)); // printf e upper font support kore, echo te kore na



