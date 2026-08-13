<?php
$totalCompra = $_POST['total'];
$percentualComissao = $_POST['percentual'];
$valorComissao = $totalCompra * ($percentualComissao / 100);
echo "O valor da comissão ganha pelo vendedor é: R$ " . number_format($valorComissao, 2, ',', '.');
?>