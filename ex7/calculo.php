<?php
$valorCompra = $_POST['valor_compra'];
$pagamentoCartao = $_POST['pagamento_cartao'];
$entregaDomicilio = $_POST['entrega_domicilio'];

$valorFinal = $valorCompra;

if ($pagamentoCartao == "sim") {
    $desconto = $valorCompra * 0.05;
    $valorFinal = $valorFinal - $desconto;
}

if ($entregaDomicilio == "sim") {
    $taxa = $valorCompra * 0.02;
    $valorFinal = $valorFinal + $taxa;
}

echo "<h3>Resumo da Compra</h3>";
echo "Valor original: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "Valor final a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
?>