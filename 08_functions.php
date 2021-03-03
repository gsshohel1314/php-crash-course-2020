<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "Hello I am Zura" . "<br>";
}
hello();
hello();

// Function with argument
function my_name($name){
    echo "Hello I am $name" . "<br>";
}
my_name('Shohel');
my_name('Rana');

// Create sum of two functions
function sum_two_number($a, $b){
    return $a + $b;
}
echo sum_two_number(5, 6) . "<br>";
echo sum_two_number(2, 3) . "<br>";

// Create function to sum all numbers using ...$nums
function sum(...$nums){
    var_dump($nums);
    echo "<br>";

    $sum = 0;
    foreach( $nums as $n){
        $sum = $sum + $n;
    }
    return $sum;
}
echo sum(1, 2, 3, 4, 5, 6, 7) . "<br>";

// Arrow functions

function add(...$nums){
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo add(1, 2, 3, 4, 5, 6, 7, 8, 9);
