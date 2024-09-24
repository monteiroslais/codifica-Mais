<?php

namespace Veiculos\Classes;

use Veiculos\Interface\VeiculoInterface;

abstract class Veiculo implements VeiculoInterface {

  public function acelerar() {
    echo "O Veiculo acelerou..!\n";
  }

  public function frear() {
    echo "O Veiculo freou..!\n";
  }

  public function exibirDetalhes() {
    echo "Exibindo detalhes do veiculo...\n";
  }

}