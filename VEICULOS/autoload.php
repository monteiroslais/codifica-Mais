<?php

require __DIR__ . '/interfaces/VeiculoInterface.php';

function autoloadClass($class) {
  $parts = explode('\\', $class);
  require __DIR__ . '/classes/' . end($parts) . '.php';
}

spl_autoload_register('autoloadClass');

use Veiculos\Classes\Moto;
use Veiculos\Classes\Carro;
use Veiculos\Classes\Caminhao;

$moto = new Moto();
$moto->acelerar();
$moto->frear();

$carro = new Carro();
$carro->acelerar();
$carro->frear();

$caminhao = new Caminhao();
$caminhao->acelerar();
$caminhao->frear();