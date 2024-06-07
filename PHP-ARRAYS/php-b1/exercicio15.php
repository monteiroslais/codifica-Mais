<?php

//receber o array de 7 elementos

$numeros = [];
    echo "Digite 7 números" . PHP_EOL;
for ($i = 0; $i < 7; $i++){
    
}



















//RESPOSTA DO CHATGPT

<?php
function lerArray() {
    $array = [];
    echo "Digite 7 elementos para o array:\n";
    for ($i = 0; $i < 7; $i++) {
        $elemento = (int)readline("Elemento " . ($i + 1) . ": ");
        $array[] = $elemento;
    }
    return $array;
}

function verificarNumero($array, $numero) {
    $posicoes = [];
    foreach ($array as $index => $valor) {
        if ($valor == $numero) {
            $posicoes[] = $index;
        }
    }
    return $posicoes;
}

function main() {
    $array = lerArray();
    $numero = (int)readline("Digite um número para verificar se está presente no array: ");
    
    $posicoes = verificarNumero($array, $numero);
    
    if (!empty($posicoes)) {
        echo "O número $numero está presente nas seguintes posições: " . implode(", ", $posicoes) . "\n";
    } else {
        echo "O número $numero não está presente no array.\n";
    }
}

// Executa o programa
main();
?>
