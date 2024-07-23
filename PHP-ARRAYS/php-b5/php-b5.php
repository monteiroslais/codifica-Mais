<?php

function calcularDesconto (float $valorOriginal, int $porcentagemDesconto) {
  $valorFinalComDescontoAplicado = $valorOriginal - ($valorOriginal * ($porcentagemDesconto / 100));
  return $valorFinalComDescontoAplicado;
}

$valorOriginalDoProduto = (float) readline("Insira o valor do produto: ");
$desconto = (int) readline("Insira a porcentagem do desconto: ");

$valorFinal = calcularDesconto ($valorOriginalDoProduto, $desconto);

echo "O valor final do produto com o desconto de {$desconto}% é R${$valorFinal}";