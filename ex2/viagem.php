<?php
$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];
$precoInput = $_POST['preco'];

define("PRECO_GASOLINA", $precoInput);

$litrosConsumidos = $distancia / $consumo;
$gastoTotal = $litrosConsumidos * PRECO_GASOLINA;

echo "<h3>Resultados da Viagem:</h3>";
echo "Gasto total com a viagem: R$ " . number_format($gastoTotal, 2, ',', '.') . "<br>";
echo "Litros de combustível consumidos: " . number_format($litrosConsumidos, 2, ',', '.') . " L<br>";
echo "Preço pago por litro: R$ " . number_format(PRECO_GASOLINA, 2, ',', '.') . "<br>";
?>