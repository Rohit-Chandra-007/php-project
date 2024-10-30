<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
// string
$name = 'Sanjay';
$name2 = 'Rohit';

var_dump($name);
echo "<br>";
var_dump($name2);
echo "<br>";
echo gettype($name);
echo "<br>";
echo gettype($name2);

echo "<br>";
// integer
$age = 25;
echo gettype($age);

echo "<br>";
// string concatenation
echo $name . " is " . $age . " years old.";
echo "<br>";
echo "$name is $age years old.";

// type casting in PHP
$num1 = "25";
$num2 = 10;
$num3 = 10010.5;
$num4 = "10.5";
$fruit = "apple";
$bool1 = true;
$bool2 = false;
$null = Null;
echo "<br>";
$sum = $num1 + $num2; // php by its own will convert string to integer
echo $sum;
echo "<br>";
echo $num1 + $num4; // php by its own will convert string to float
echo "<br>";

echo $num1 + $num4; // php by its own will convert string to float 
echo "<br>";
echo gettype($num1 + $num4); // php by its own will convert string to float 
echo "<br>";
echo $num1 . $num3;
echo "<br>";
echo gettype($num1 . $num3);
echo "<br>";
//echo $num1 + $fruit; // this will give error
echo $num1 + $bool2; // php by its own will convert boolean to integer bool false = 0 , true = 1

echo "<br>";
//echo $fruit + $bool1; // php by its own will convert boolean to integer bool false = 0 , true = 1

// explicit type casting
echo (string) $num2;
