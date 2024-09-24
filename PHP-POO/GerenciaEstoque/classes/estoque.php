<?php

namespace GerenciaEstoque\Classes;

use GerenciaEstoque\Classes\Produtos

class Estoque extends Produtos {

  public function adicionar() {
    echo "O estoque adicionou ...!\n";
  }

  public function listar() {
    echo "O estoque listou ...!\n";
  }

  public function vender() {
    echo "O estoque vendeu ...!\n";
  }

  public function atualizar() {
    echo "O estoque atualizou ...!\n";
  }

  public function deletar() {
    echo "O estoque deletou ...!\n";
  }

}