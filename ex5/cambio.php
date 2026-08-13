<?php
define("TAXA_CAMBIO", 5.45);
$dolares = $_POST['dolares'];
$reais = $dolares * TAXA_CAMBIO;
echo "a) A quantidade convertida em reais: R$ " . number_format($reais, 2, ',', '.') . "<br>";
echo "b) O valor da taxa de câmbio usada: R$ " . number_format(TAXA_CAMBIO, 2, ',', '.');
?>