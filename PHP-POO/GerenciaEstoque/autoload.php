<?php 

spl_autoload_register (function($className) {
    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
})



//VERIFICAR


require __DIR__ . '/interface/ProdutoInterface.php';

function autoloadClass($class) {
  $parts = explode('\\', $class);
  require __DIR__ . '/classes/' . end($parts) . '.php';
}

spl_autoload_register('autoloadClass');

use GerenciaEstoque\Classes\estoque;
use GerenciaEstoque\Classes\menu;
use GerenciaEstoque\Classes\produto;
use GerenciaEstoque\Classes\ProdutoPerecivel;

$estoque = new estoque();
$estoque->adicionar();
$estoque->listar();
$estoque->vender();
$estoque->atualizar();
$estoque->deletar();

$menu = new menu();
$menu->adicionar();
$menu->listar();
$menu->vender();
$menu->atualizar();
$menu->deletar();

$produto = new produto();
$produto->adicionar();
$produto->listar();
$produto->vender();
$produto->atualizar();
$produto->deletar();

$ProdutoPerecivel = new ProdutoPerecivel();
$ProdutoPerecivel->adicionar();
$ProdutoPerecivel->listar();
$ProdutoPerecivel->vender();
$ProdutoPerecivel->atualizar();
$ProdutoPerecivel->deletar();