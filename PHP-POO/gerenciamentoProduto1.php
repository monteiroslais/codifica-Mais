<?php

class Produto

{
    // Atributos privados
    private $nome;
    private $preco;
    private $quantidadeEstoque;

    // Construtor para inicializar o produto
    public function __construct($nome, $preco, $quantidadeEstoque)
{
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
}

    // Método para alterar o preço
    public function alterarPreco($novoPreco)
{
        $this->preco = $novoPreco;
}

    // Método para ajustar a quantidade em estoque
    public function ajustarEstoque($quantidade)
{
        $this->quantidadeEstoque = $quantidade;
}

    // Método para exibir os detalhes do produto
    public function exibirDetalhes()
{
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Quantidade em estoque: " . $this->quantidadeEstoque . "\n";
}

}

?>