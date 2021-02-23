<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a += $b; echo $a . '<br>';
$a -= $b; echo $a . '<br>';
$a *= $b; echo $a . '<br>';
$a /= $b; echo $a . '<br>';
$a %= $b; echo $a . '<br>';

// Increment operator
echo $a++ . "<br>";
echo ++$a . "<br>";

// Decrement operator
echo $a-- . "<br>";
echo --$a . "<br>";

// Number checking functions
echo is_float(1.2) . "<br>"; //true => 1
echo is_double(1.2) . "<br>"; //true => 1
echo is_int(5) . "<br>"; //true => 1
echo is_numeric("3.50") . "<br>"; //true => 1
echo is_numeric("3g.50") . "<br>"; //false => 0

// Conversion
$strNumber = "12.34";
$number = (float)$strNumber;
var_dump($number);
echo "<br>";
$num = (int)$strNumber;
var_dump($num);
echo "<br>";

// Number functions
echo "abs(-15) = " . abs(-15) . "<br>";
echo "pow(2, 3) = " . pow(2,3) . "<br>";
echo "sqrt(16) = " . sqrt(16) . "<br>";
echo "max(2, 5, 1) = " . max(2, 5, 1) . "<br>";
echo "min(2, 5, 1) = " . min(2, 5, 1) . "<br>";
echo "round(2.4) = " . round(2.4) . "<br>";
echo "round(2.6) = " . round(2.6) . "<br>";
echo "floor(2.9) = " . floor(2.9) . "<br>";
echo"ceil(2.1) = " . ceil(2.1) . "<br>";

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
