<?php

class Carro
{
    // Atributos
public $marca;
public $modelo;
public $anoFabricacao;

    //Construtor para inicializar os atributos
public function __construct($marca, $modelo, $anoFabricacao)
{
    $this->$marca = $marca;
    $this->$modelo = $modelo;
    $this->$anoFabricacao = $anoFabricacao;
}

    //Métodos
    public function acelerar() {
        return "O carro " . $this->marca . " " . $this->modelo . " está acelerando.";
    }
    public function frear() {
        return "O carro " . $this->marca . " " . $this->modelo . " está freando.";
    }
}
?>