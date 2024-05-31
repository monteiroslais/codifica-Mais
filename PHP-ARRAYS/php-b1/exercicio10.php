<?php

$numeros = [];
    for ($i = 0; $i < 5; $i++){
        $numero = get_input ("Digite um número");
    }

    echo "Esses são os números em ordem inversa:";
        for ($i = 4; $i > 0; $i--){
            echo $numero[$i];
        }