<?php

// Create array
$fruits = ['banana', 'apple', 'orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1];

// Set element by index
$fruits[0] = "Mango";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
var_dump(isset($fruits[2])); //true
echo "<br>";
var_dump(isset($fruits[3])); //false
echo "<br>";

// Append element
$fruits[] = 'banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Peach');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "one,two,three";
echo '<pre>';
var_dump(explode(',', $string));
echo '</pre>';

// Combine array elements into string
$name = ['Shohel', 'Rana', 'Moon'];
echo implode(', ', $name);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Mango', $fruits));
echo '</pre>';

echo '<pre>';
var_dump(in_array('Peach', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Mango', $fruits));
echo '</pre>';

echo '<pre>';
var_dump(array_search('Shohel', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($vegetables, $fruits));
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays