<?php

function somaDosNumeros ($numeroA, $numeroB)

{
    $soma = 0;
    for ($i = $numeroA; $i <= $numeroB; $i ++)
        {
        if ($i % 2 !== 0) 
            {$soma += $i;}
        }
    echo $soma;
}

$numeroA = $argv[1];
$numeroB = $argv[2];

if ($numeroA > $numeroB) 
{
    echo "O valor de A é maior que B! Digite os números novamente." . PHP_EOL;
}
else 
{
    $soma = somaDosNumeros($numeroA, $numeroB);
    echo "A soma dos números impares no intervalo [a, b] é {$soma}" . PHP_EOL;
}