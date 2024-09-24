<?php

$contaBancaria1 = new ContaBancaria(01, "Laís", 20000);

$contaBancaria1->sacar(100);
$contaBancaria1->sacar(200);
$contaBancaria1->depositar(50);
$contaBancaria1->exibirSaldo();