<?php

$numeros = [];
$numero = 0;

echo "Digite vários números" .PHP_EOL;
while ($numero != -1)

{
  $numero = get_input ("Digite um número: ");
        if ($numero != -1) 
    {
      array_push($numeros, (int) $numero);
    }
}

{
    $maiorNumero = max ($numeros);
    $menorNumero = min ($numeros);
    
    echo "O maior número foi: $maiorNumero";
    echo "O menor número foi: $menorNumero";
} 