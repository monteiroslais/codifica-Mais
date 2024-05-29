<?php

$numero = $argv[1];
$contador = 1;

while ($contador <= 10) 
{
    $produto = $contador * $numero;
    echo "{$contador} x {$numero} = {$produto}" . PHP_EOL;
    $contador = $contador + 1;
}