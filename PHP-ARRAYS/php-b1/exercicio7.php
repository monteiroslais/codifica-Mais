<?php

$numero = get_input ("Digite um número");
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo ("O resultado da multiplicação entre $numero e $i é: $resultado");
}