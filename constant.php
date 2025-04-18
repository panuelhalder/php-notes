<?php

/* 
Constants are like variables, except that once they are defined they cannot be changed or undefined.

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).
*/





define('PI',3.1415);

echo PI; // evabe constant likhte hoy

echo constant('PI'); // evabeo lekha jay

$constant = 'constant';

echo "Value of PI is {$constant('PI')}"; // tricks to run constant value in variables

