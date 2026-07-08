<?php

$arr = array("Apple","Mango","Apple","Banana","Orange");

echo "Original Array:<br>";
print_r($arr);

echo "<br><br>1. sort()<br>";
sort($arr);
print_r($arr);

echo "<br><br>2. array_push()<br>";
array_push($arr, "Grapes");
print_r($arr);

echo "<br><br>3. array_pop()<br>";
array_pop($arr);
print_r($arr);

echo "<br><br>4. array_count_values()<br>";
print_r(array_count_values($arr));

echo "<br><br>5. array_change_key_case()<br>";

$data = array(
    "NAME" => "Meet",
    "CITY" => "Rajkot",
    "COURSE" => "BCA"
);

print_r(array_change_key_case($data, CASE_LOWER));

?>