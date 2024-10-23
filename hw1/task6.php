<?php
$number = 4537835;
$digits = str_split($number);
$count = count($digits);
$max = max($digits);
$min = min($digits);
$sum = array_sum($digits);
$average = $sum / $count;

echo "Number is: $number<br>";
echo "Digits in the number: " . implode(', ', $digits) . "<br>";
echo "Count of digits: $count<br>";
echo "Max: $max, Min: $min<br>";
echo "Summ: $sum, AVG: " . number_format($average, 2) . "<br>";
?>