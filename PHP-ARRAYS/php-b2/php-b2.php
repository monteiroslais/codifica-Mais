<?php

function main(){
    $valorConta = get_input ("Digite o valor da conta") . PHP_EOL;
    $porcentagemGorjeta = get_input ("Digite a porcentagem da gorjeta") . PHP_EOL;
    $valorGorjeta = ($valorConta * $porcentagemGorjeta) / 100;
    $valorTotal = ($valorConta + $valorGorjeta);

    echo ("O valor da conta é: $valorConta") . PHP_EOL;
    echo ("O valor da porcentagem da gorjeta é: $porcentagemGorjeta") . PHP_EOL;
    echo ("O valor da gorjeta é: $valorGorjeta") . PHP_EOL;
    echo ("O valor total a ser pago, incluindo a gorjeta, é: $valorTotal") . PHP_EOL;
}

main ();