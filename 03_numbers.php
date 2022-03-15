<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.2;

// Arithmetic operations
echo ($a + $b) * $c; //10.8
echo $a - $b . '<br>' // 1
echo $a * $b . '<br>' // 20
echo $a / $b . '<br>' // 1.25
echo $a % $b . '<br>' // 1


// Assignment with math operators
$a += $b; echo $a . '<br>'; // $a = 9
$a -= $b; echo $a . '<br>'; // $a = 1
$a *= $b; echo $a . '<br>'; // $a = 20
$a /= $b; echo $a . '<br>'; // $a = 1.25
$a %= $b; echo $a . '<br>'; // $a = 9

// Increment operator
echo $a++ . '<br>'; // = 5 increases value
echo ++$a; // = 7 decreases value

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25); //true
is_double(1.25); //true
is_int(5); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false

// Conversion
$strNumber = '12.34';
$number = intval($strNumber); // or $number = floatval($strNumber);
var_dump($number);

// Number functions
echo "abs (-15)" . abs (-15) . '<br>'; // = abs(-15) 15
echo "pow (2,3)" . pow (2,3) . '<br>'; // = pow(2,3) 8
echo "sqrt (16)" . sqrt (16) . '<br>'; // = sqrt(16) 4
echo "max (2,9,3)" . max (2,9,3) . '<br>'; // = max(2.9.3) 9
echo "min (2,3)" . min (2,3) . '<br>'; // = min(2,3) 2
echo "round (2.4)" . round (2.4) . '<br>'; // = round(2.4) 2
echo "round (2.6)" . round (2.6) . '<br>'; // = round(2.6) 3
echo "floor (2.6)" . abs (2.6) . '<br>'; // =floor(2.6) 2
echo "ceil (2.4)" . ceil (2.4) . '<br>'; // = ceil(2.4) 3

// Formatting numbers
$number = 123456789.12345; //
echo number_format($number, 2 , '.', ' ' )

// https://www.php.net/manual/en/ref.math.php
