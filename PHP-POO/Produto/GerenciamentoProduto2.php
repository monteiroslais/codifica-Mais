<php? 
// Criação de um objeto Produto
$produto = new Produto("Camiseta", 59.90, 100);

// Alterar o preço do produto
$produto->alterarPreco(49.90);

// Ajustar a quantidade em estoque
$produto->ajustarEstoque(150);

// Exibir os detalhes do produto
$produto->exibirDetalhes();