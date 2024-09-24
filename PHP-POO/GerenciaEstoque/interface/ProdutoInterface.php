<?php

namespace Produtos\Interface;

interface ProdutoInterface {

  public function adicionar();
  public function listar();
  public function vender();
  public function atualizar();
  public function deletar();
  
}