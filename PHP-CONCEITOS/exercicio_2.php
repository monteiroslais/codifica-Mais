<?php

$primeiraNota = $argv[1];
$segundaNota = $argv[2];
$terceiraNota = $argv[3];
$total = $primeiraNota + $segundaNota + $terceiraNota;
$media = $total / 3;

// leia as notas

echo $media;