<?php

class ContaBancaria {
   private $saldo = 0; 
   private $contaBancaria;
   private $nomeTitular = "";



   public function depositar($valor){
    $this->saldo+=$valor;
   }
   public function verificarSaldo(){
    print_r($this->saldo . PHP_EOL);
   }

   public function sacar($valor){
    if($this->saldo<$valor){
        print_r("Você não tem saldo suficiente" . PHP_EOL);
        return;
    }

    $this->saldo-=$valor;
   }
}

$conta = new ContaBancaria();
$conta->depositar(1000);

$conta->verificarSaldo();
$conta->depositar(1500);
$conta->verificarSaldo();
$conta->sacar(5500);
$conta->verificarSaldo();