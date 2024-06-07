<?php



//IAN

$valorCompra = (int) readline ("Insira o valor da compra (R$): ");

function aplicarDesconto ($valorCompra, $percentualDesconto) {
  return $valorCompra - ($valorCompra * ($percentualDesconto / 100));
}

function calcularDescontoProgressivo ($valorCompra) {
  if ($valorCompra < 100.0) {
    return $valorCompra;
  } 
  else if ($valorCompra >= 100.0 && $valorCompra <= 500.0) {
    return aplicarDesconto ($valorCompra, 10);
  } 
  else if ($valorCompra > 500.0) {
    return aplicarDesconto ($valorCompra, 20);
  }
}

$valorFinal = calcularDescontoProgressivo ($valorCompra);

echo "O valor final, após a aplicação do desconto progressivo, é: R${$valorFinal}";