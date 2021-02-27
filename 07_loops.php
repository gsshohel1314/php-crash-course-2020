<?php

// while
/*while(true){
    echo "Hello"; // Don't print this loop because it is infinity loop. because while condition is always true.
}*/

// Loop with $counter
$counter = 0;
while ($counter < 10) {
    echo $counter . "<br>";
    $counter++;
}

// do - while
$number = 0;
do {
    echo $number . "<br>";
    $number++;
} while ($number < 10);

// for
for ($i=0; $i < 10; $i++) { 
    echo $i . "<br>";
}

// foreach
$fruits = ['Apple', 'Banana', 'Orange', 'Mango'];
foreach($fruits as $key => $fruit){
    echo $key .' '. $fruit . '<br>';
}

// Iterate Over associative array.
$persons = [
    'first_name' => 'Shohel',
    'last_name' => 'Rana',
    'age' => 25,
    'channel' => 'Traversy Media',
    'hobbies' => ['Play Cricket', 'Watch Movies', 'Programming']
];

foreach ($persons as $key => $person){
    if(is_array($person)){
        echo $key .':'. implode(', ', $person) . "<br>";
    }else{
        echo $key .":". $person . "<br>";
    }
}