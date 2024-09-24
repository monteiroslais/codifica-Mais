<php?

// Criação de um objeto Funcionario
$funcionario = new Funcionario("João Silva", "Desenvolvedor", 4500.00);

// Ajustar o salário do funcionário
$funcionario->ajustarSalario(5000.00);

// Alterar o cargo do funcionário
$funcionario->alterarCargo("Desenvolvedor Sênior");

// Exibir os detalhes do funcionário
$funcionario->exibirDetalhes();