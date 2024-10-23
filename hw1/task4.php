<?php
$initial_sum = 300;
$interest_rate = 0.20;
$years = 20;

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Year</th><th>Sum Start</th><th>Sum End</th><th>Profit</th></tr>";

for ($year = 1; $year <= $years; $year++) {
    $sum_start = $initial_sum;
    $profit = $sum_start * $interest_rate;
    $sum_end = $sum_start + $profit;

    echo "<tr>
            <td>$year</td>
            <td>" . number_format($sum_start, 2) . "</td>
            <td>" . number_format($sum_end, 2) . "</td>
            <td>" . number_format($profit, 2) . "</td>
          </tr>";

    $initial_sum = $sum_end;
}

echo "</table>";
?>