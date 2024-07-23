<?php

function main(){

    $largura = get_input ("Digite o valor da largura") . PHP_EOL;
    $altura = get_input ("Digite o valor da altura") . PHP_EOL;

    $area = $largura * $altura;
    $perimetro = ($largura + $altura) * 2;

    echo "Área: $area metros" . PHP_EOL;
    echo "Perímetro: $perimetro metros" . PHP_EOL;
}
main();