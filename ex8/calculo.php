<?php
$valorCompra = $_POST['valor_compra'];
$valorFinal = $valorCompra;

if (isset($_POST['pagamento_cartao'])) {
    $desconto = $valorCompra * 0.05;
    $valorFinal = $valorFinal - $desconto;
}

if (isset($_POST['entrega_domicilio'])) {
    $taxa = $valorCompra * 0.02;
    $valorFinal = $valorFinal + $taxa;
}

echo "<h3>Resumo da Compra</h3>";
echo "Valor original: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "Valor final a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
?>