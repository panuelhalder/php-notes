<?php


/* 
A variable in PHP is a container used to store data such as numberm, strings, arrays or objects. The value stored in a variable can be changed or updated during the execution of the script. 

*A variable starts with the $ sign, followed by the name of the variable
*A variable name must start with a letter or the underscore character
*A variable name cannot start with a number
*A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
*Variable names are case-sensitive ($age and $AGE are two different variables)
*Variable er naam er moddhe kono space deya jabena
*Variable naam e puncuation mark use kora jabena
*/


$name = 'Bangladesh'; //string
$age = 38; // Integer
$salary = 40000.50; // Float
$isEmployed = true; // Boolean camel case
$MyNameIs = "shimul"; // Title case ---- Ideal and support all 
$my_name = "panuel"; // WordPress follow this style but Zend not support

echo $name;


echo '<br/>' . 'Hello ' . $name; // Concatination diye add kora jay
echo '<br/>';
echo "Hello $name";
echo "Hello {$name}"; // Good practice
echo '<br/>';
echo 'Hello {$name}';  // SIngle qoute er moddhe variable thakle PHP etake variable hisebe dekhena
echo "<br/>";
echo "Hello my name is {$name}, my age is {$age}";


/* Variable er man poribortonshil  */

$task = "Read";
echo "<br/> {$task}";
$task = "Write";
echo "<br/> {$task}";






/*     ***MUST READ***
php standard maintain: PHP-FIG 
https://www.php-fig.org 

*/
