<?php

namespace Veiculos\Classes;

use Veiculos\Classes\Veiculo;

class Carro extends Veiculo {

  public function acelerar() {
    echo "O Carro acelerou..!\n";
  }

  public function frear() {
    echo "O Carro freou..!\n";
  }

  public function exibirDetalhes() {
    echo "Exibindo detalhes do carro...\n";
  }

}