<?php
// Magic constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";


echo __LINE__ . "<br>";

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

$allFiles = scandir('../');
echo '<pre>';
var_dump($allFiles);
echo '</pre>';

// file_get_contents, file_put_contents
$data = file_get_contents('lorem.txt') . "<br> <br>";
echo $data;
file_put_contents('newFile.txt', 'Some text here');

// file_get_contents from URL
$jsonUsers = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $jsonUsers;
$users = json_decode($jsonUsers, true); // true dile object dibe na.
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php

// file_exists
echo file_exists('lorem.txt') . "<br>"; // true orthat 1;
echo file_exists('loremssss.txt') . "<br>"; // false orthat 0;

// is_dir
echo is_dir('test') . "<br>"; // true orthat 1;
echo is_dir('testssss') . "<br>"; // false orthat 0;

// filemtime
// filesize
// disk_free_space
// file