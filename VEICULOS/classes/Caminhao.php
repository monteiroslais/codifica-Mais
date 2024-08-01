<?php

namespace Veiculos\Classes;

use Veiculos\Classes\Veiculo;

class Caminhao extends Veiculo {

  public function acelerar() {
    echo "O Caminhão acelerou..!\n";
  }

  public function frear() {
    echo "O Caminhão freou..!\n";
  }

  public function exibirDetalhes() {
    echo "Exibindo detalhes do caminhão...\n";
  }

}