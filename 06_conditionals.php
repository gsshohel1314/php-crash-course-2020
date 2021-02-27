<?php

$age = 20;
$salary = 300000;

// Sample if
if($age === 20){
    echo "1" . "<br>";
}

// Without circle braces
if($age === 20) echo "1" . "<br>";

// Sample if-else
if($age >= 25){
    echo "1" . "<br>";
}else{
    echo "2" . "<br>";
}

// Difference between == and ===

// == means just compare value.
// === means check value and with this datatype.
$age == 20;     // true
$age == '20';   // true

$age === 20;    // true
$age === '20';  //false

// if AND
// AND operation success when two conditions are ture.
if($age > 20 && $salary === 300000){
    echo "Do something". "<br>";
}

// if OR
// OR operation success when only one condition is ture.
if($age > 20 || $salary === 300000){
    echo "Don't do something" . "<br>";
}

// Ternary if
echo $age < 25 ? 'Young' : 'Old';

// Short ternary
$my_age = $age ?: 18;
echo "<pre>";
var_dump($my_age);
echo "</pre>";

// Null coalescing operator
$his_name = isset($name) ? $name : 'John';
echo $his_name . "<br>";

$my_name = $name ?? "Doe";
echo $my_name . "<br>";

// switch
$user_role = "Super Admin";
switch($user_role){
    case "Admin":
        echo "Hii i am admin";
        break;
    case "Editor":
        echo "Hii i am editor";
        break;
    case "Author":
        echo "Hii i am author";
        break;
    default:
        echo "This user role is invalid";
}
