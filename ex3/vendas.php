<?php
$valorVenda = $_GET['valor_venda'];

$desconto = $valorVenda * 0.10;
$icms = $valorVenda * 0.12;
$comissao = $valorVenda * 0.05;

echo "<h3>Resumo da Venda:</h3>";
echo "a) Valor do desconto (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "b) Valor do ICMS pago pela loja (12%): R$ " . number_format($icms, 2, ',', '.') . "<br>";
echo "c) Comissão do vendedor (5%): R$ " . number_format($comissao, 2, ',', '.') . "<br>";
?>