<?php

// Create simple string
$name = 'world';
$string = 'hello world';
$string2 = 'hello world';
echo $string . '<br>'; 
echo $string2 . '<br>'

// String concatenation
echo 'Hello '.' World '.' and PHP '.' <br>';

// String functions
$string = " Hello world ";

echo "1 -" . strlen($string) . '<br>' . PHP_EOL; // 21
echo "2 -" . trim($string) . '<br>' . PHP_EOL; // Hello world
echo "3 -" . ltrim($string) . '<br>' . PHP_EOL; //Hello world
echo "4 -" . rtrim($string) . '<br>' . PHP_EOL; //Hello World
echo "5 -" . str_word_count($string) . '<br>' . PHP_EOL; //2
echo "6 -" . strrev($string) . '<br>' . PHP_EOL; // dlrow olleh
echo "7 -" . strtoupper($string) . '<br>' . PHP_EOL; // HELLO WORLD
echo "8 -" . strtolower($string) . '<br>' . PHP_EOL; // hello world
echo "9 -" . ucfirst($string) . '<br>' . PHP_EOL; // Hello
echo "10 -" . lcfirst($string) . '<br>' . PHP_EOL; //hELLO
echo "11 -" . ucwords($string) . '<br>' . PHP_EOL; //Hello World
echo "12 -" . strpos($string) . '<br>' . PHP_EOL; // 
echo "13 -" . stripos($string) . '<br>' . PHP_EOL; // 10
echo "14 -" . substr($string) . '<br>' . PHP_EOL; // o World
echo "15 -" . str_replace($string) . '<br>' . PHP_EOL; // Hello PHP
echo "16 -" . str_ireplace($string) . '<br>' . PHP_EOL; // Hello PHP


// Multiline text and line breaks
$longText ="Hello, my name is Timmy
            I am 51
            I love life";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags
$longText ="Hello, my name is <b>Timmy</b>
            I am <b>51</b>
            I love life";

echo "1 -" . $longText . '<br>';
echo "2 -" . nl2br($longText) . '<br>';
echo "3 -" . htmlentities($longText) . '<br>';
echo "4 -" . nl2br(htmlentitie ($longText)) . '<br>';

// https://www.php.net/manual/en/ref.strings.php