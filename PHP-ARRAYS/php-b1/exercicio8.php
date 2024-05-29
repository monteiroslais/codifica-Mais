<?php
//revisar
$numeros = [];

$numeros = get_input ("Digite um número.");{
    $soma = 0;
    for ($i = 0; $i <= 5; $i++){
        if ($i % 2 !==0){
            $soma += $i;
        }
    }
}
echo ("A soma dos números pares é: $soma");