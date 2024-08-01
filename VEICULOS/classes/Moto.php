<?php

namespace Veiculos\Classes;

use Veiculos\Classes\Veiculo;

class Moto extends Veiculo {

  public function acelerar() {
    echo "A Moto acelerou..!\n";
  }

  public function frear() {
    echo "A Moto freou..!\n";
  }

  public function exibirDetalhes() {
    echo "Exibindo detalhes da moto...\n";
  }

}