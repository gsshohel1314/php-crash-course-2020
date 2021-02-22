<?php

// What is a variable

// Variable types
// There are 8 types of variable:
/*
    String
    Integer
    Float/ Double
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = "Zura";
$age = 28;
$height = 1.85;
$isMale = false;
$salary = null;
 
// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary;

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo "<br>";
echo gettype($name);

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
isset($name); // true
isset($another_variable); // false

// Constants
echo '<br>';
define('PI', 3.1416);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . "<br>";
echo PHP_INT_MAX; // Maximum integer value