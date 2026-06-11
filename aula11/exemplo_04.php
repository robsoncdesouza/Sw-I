<?php
function calcularDesconto($valorDaCompra) {
$desconto = $valorDaCompra * 0.10;

$valorFinal = $valorDaCompra - $desconto;

return $valorFinal;
}

$totalCarrinho = 250.00;
$valorAPagar = calcularDesconto($totalCarrinho);
echo "Valor original: R$ " . $totalCarrinho . "<br>";
echo "Valor com desconto: R$ " . $valorAPagar;
?>