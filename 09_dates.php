<?php

// Print current date
echo date('Y-m-d H:i:s');

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s'). '<br>';

// Print current timestamp
echo date(). '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parseDate = date_parse('2022-03-08 05:00:00');
    echo '<pre>';
    var_dump($parseDate);
    echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$datString = 'March 8 2022 12:05:20';

$parseDate = date_parse('F j Y, H:i:s'. $datString);
    echo '<pre>';
    var_dump($parseDate);
    echo '</pre>';