<?php

class ContaBancaria

{
    // Atributos
private $numeroConta;
private $nomeTitular;
private $saldoConta;

    //Construtor para inicializar os atributos
public function __construct($numeroConta, $nomeTitular, $saldoConta)
{
    $this->numeroConta = $numeroConta;
    $this->nomeTitular = $nomeTitular;
    $this->saldoConta = $saldoConta;
}

}

  public function depositar($quantia)
  {
    $this->saldoConta = $this->saldoConta + $quantia;
    echo "Foi depositado {$quantia} na conta " . $this->numeroConta . "\n";
  }
  
  public function sacar($quantia)
  {

    if ($this->saldoConta <= 0) {
      echo "Não foi possível fazer o saque, não há saldo na conta!\n";
      return -1;
    }

    $this->saldoConta = $this->saldoConta - $quantia;
    echo "Foi sacado {$quantia} da conta " . $this->numeroConta . "\n";
  }
  
  public function exibirSaldo()
  {
    echo "O saldo atual da conta do " . $this->nomeTitular . " é " . $this->saldoConta . "\n";
  }