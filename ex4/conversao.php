<?php
$fahrenheit = $_POST['temperatura'];
$celsius = ($fahrenheit - 32) * 5 / 9;
echo "A temperatura em Celsius é: " . number_format($celsius, 2, ',', '.') . " °C";
?>