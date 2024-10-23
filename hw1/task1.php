<?php
$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(1, 1000);
}
$min = min($numbers);
$max = max($numbers);

echo "Сгенерированные числа: " . implode(", ", $numbers) . "<br>";
echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";
?>
