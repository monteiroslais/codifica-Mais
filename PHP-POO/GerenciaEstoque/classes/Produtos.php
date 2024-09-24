<?php

namespace GerenciaEstoque\Classes;

use GerenciaEstoque\Classes\ProdutoInterface;

abstract class Produtos implements ProdutoInterface {

  public function adicionar() {
    echo "O produto adicionou...!\n";
  }

  public function listar() {
    echo "O produto listou...!\n";
  }

  public function vender() {
    echo "O produto vendeu...!\n";
  }

  public function atualizar() {
    echo "O produto atualizou...!\n";
  }

  public function deletar() {
    echo "O produto deletou...!\n";
  }

}