<?php

$value = "123.45";

echo "Original Value: " . $value . "<br>";
echo "Original Type: " . gettype($value) . "<br><br>";


settype($value, "integer");
echo "After settype() to Integer:<br>";
echo "Value: " . $value . "<br>";
echo "Type: " . gettype($value) . "<br><br>";


settype($value, "double");  
echo "After settype() to Float:<br>";
echo "Value: " . $value . "<br>";
echo "Type: " . gettype($value) . "<br><br>";


settype($value, "string");
echo "After settype() to String:<br>";
echo "Value: " . $value . "<br>";
echo "Type: " . gettype($value) . "<br>";
?>