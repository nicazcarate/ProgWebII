<?php
$valorCompra = $_POST['valor_compra'];
$formaPagamento = $_POST['forma_pagamento'];
$valorFinal = 0;

if ($formaPagamento == "vista") {
    $valorFinal = $valorCompra - ($valorCompra * 0.05);
} else {
    $valorFinal = $valorCompra + ($valorCompra * 0.02);
}

$mensagemSorteio = "O cliente NÃO está apto a participar do sorteio do automóvel.";

if (isset($_POST['cartao_visa'])) {
    $mensagemSorteio = "O cliente ESTÁ apto a participar do sorteio do automóvel.";
}

echo "<h3>Resumo da Operação</h3>";
echo "a) Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "<br><br>";
echo "b) Status da promoção: " . $mensagemSorteio;
?>