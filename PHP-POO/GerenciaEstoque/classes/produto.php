<?php

namespace GerenciaEstoque\Classes;

use GerenciaEstoque\Classes\Produtos

class Produto extends Produtos {

  public function sku() {
    echo "O sku do produto é...!\n";
  }

  public function nome() {
    echo "O nome do produto é...!\n";
  }

  public function quantidade() {
    echo "A quantidade desse produto é...\n";
  }

  public function unidadeDeMedida() {
    echo "A unidadeDeMedida desse produto é...!\n";
  }

  public function preco() {
    echo "O preco do produto é...!\n";
  }

}