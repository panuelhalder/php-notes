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

echo "\n";


/***   . er por 2 songkhar ghor nirnoy   ***/

$n = 4.367;
printf("%.2f",$n);

echo "\n";

/***   ongko bariye songkha print kora: 123 ke 00123 kora   ***/
$m = 123;
printf("%05d", $m); // 5 ongkey print kora
echo "\n";


/***   . er age 3 ghor ar . er pore 2 ghor   ***/
$x = 123.567;
$y = 23.789;

printf("%07.2f",$x); // . soho total 7 ta ghor . er por 2 ta
echo "\n";
printf("%07.2f",$y); // . soho total 7 ta ghor . er por 2 ta
echo "\n";


/* sprintf = value ta print na kore variable er moddhe return kore ba joma rakhe */

$output = sprintf("We are living on the %s", $name);

echo $output; // ekhon return er man ta echo hoiche
