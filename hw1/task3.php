<?php
echo "<table border='1' cellpadding='5'>";

for ($j = 1; $j <= 10; $j++) {
    echo "<tr>";
    for ($i = 2; $i <= 10; $i++) {
        echo "<td>$i x $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
