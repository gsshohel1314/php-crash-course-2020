<?php

// Print current date
echo date('Y-m-d H:i:s') . "<br>";

// Print yesterday
echo date("Y-m-d H:i:s", time() - 60 * 60 * 24) . "<br>";
// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y H:i:s') . "<br>";

// Print current timestamp
echo time();

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parse_date = date_parse("2021-03-03 11:43:43");
echo "<pre>";
var_dump($parse_date);
echo "</pre>";

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$date_string = "March 3 2021 11:46:34";
$date_parse = date_parse_from_format('F j Y H:i:s', $date_string);
echo "<pre>";
var_dump($date_parse);
echo "</pre>";
