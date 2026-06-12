<?php
echo "<h3>Using for loop</h3>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Using foreach loop</h3>";

$numbers = range(5, 10);

foreach ($numbers as $num) {
    echo $num . " ";
}
