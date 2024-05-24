<?php

$idade = $argv[1];

echo "Se você tiver mais de 18 anos, então você é maior de idade" .PHP_EOL;

//Receba a idade

if ($idade <= 18) {
    echo "Você é maior de idade";
else 
    echo "Você é menor de idade";
}