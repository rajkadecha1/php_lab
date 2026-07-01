<?php

echo "<h2>1. Numeric Array (Monday to Saturday)</h2>";

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

print_r($days);
    echo "<br>";



echo "<h2>2. Associative Array (Months and Days)</h2>";



$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

print_r($months);
    echo "<br>";

echo "<h2>3. Multidimensional Array (Laptops)</h2>";

$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

print_r($laptops);
echo "<br>";
echo "";
?>
