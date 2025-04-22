<?php
$name = "Earth";
echo "We are living on the {$name}";
printf ("We are living on the %s", $name); // %s = String value

echo "\n";

$firstName = "Isaac";
$lastName = "Newton";
printf("His fist name is %s, and last name is %s", strtoupper($firstName),strrev($lastName)); // printf e upper font support kore, echo te kore na

echo "\n";

printf('His name is %2$s, %1$s',$firstName, $lastName) ; //last name agey ar first name pore deyar jonno, ekhane "" use korle $ ke variable detect kore, tai '' use korte hobe
echo "\n";

printf("The binary equipvalent of %d is %b", 12, 12); //ekhane 12 holo argument
echo "\n";

printf('The binary equipvalent of %1$d is %1$b', 12); //ekhane ekta argument diye 2 ta place holder er value deya jay

