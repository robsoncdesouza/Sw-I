<?php
// Função que recebe DOIS parâmetros
function calcularTotal($precoUnitario, $quantidade) {
$total = $precoUnitario * $quantidade;

if ($quantidade > 5) {
$total = $total - 20;
}
return $total;
}

$precoMouse = 50.00;
$qtdComprada = 6;
$valorFinalDaVenda = calcularTotal($precoMouse,
$qtdComprada);
echo "Você comprou " . $qtdComprada . " mouses.<br>";
echo "O total a pagar é: R$ " . $valorFinalDaVenda;
?>