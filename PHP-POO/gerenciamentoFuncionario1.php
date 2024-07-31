<?php

class Funcionario

{
    // Atributos privados
    private $nome;
    private $cargo;
    private $salario;

    // Construtor para inicializar o funcionário
    public function __construct($nome, $cargo, $salario)
{
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
}

    // Método para ajustar o salário
    public function ajustarSalario($novoSalario)
{
        $this->salario = $novoSalario;
}

    // Método para alterar o cargo
    public function alterarCargo($novoCargo)
{
        $this->cargo = $novoCargo;
}

    // Método para exibir os detalhes do funcionário
    public function exibirDetalhes()
{
        echo "Nome: " . $this->nome . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "\n";
}

}

?>