<?php

$itensComprados = ["carne", "cerveja", "coca-cola"];
$precoItens = [220.00, 45.0, 22.0];

$numeroTotalDeParticipantes = (int) readline("Digite o número total de participantes do churrasco: ");

if ($numeroTotalDeParticipantes <= 1) {
  echo "O churrasco foi cancelado, todo mundo furou!\n";
}

function divisaoParaCadaUmContribuir(float $valorTotalItens, int $numeroParticipantes) {
  $valorQueCadaUmDevePagar = $valorTotalItens / $numeroParticipantes;
  return $valorQueCadaUmDevePagar;
} 

$valorParaCada = divisaoParaCadaUmContribuir(array_sum($precoItens), $numeroTotalDeParticipantes);

echo "Cada pessoa deve contribuir com R${$valorParaCada}\n";

$valorMaisCaro = max($precoItens); 
$indexItemMaisCaro = array_search(max ($precoItens), $precoItens); 

echo "O item mais caro foi " . $itensComprados[$indexItemMaisCaro] . " de R${$valorMaisCaro}\n";