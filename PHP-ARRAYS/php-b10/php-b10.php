<?php


//REVISAR

$funcionarios = [
  [
    "nome" => "Pedro",
    "salario_base" => 2500,
    "horas_extras" => 10
  ],
  [
    "nome" => "Renata",
    "salario_base" => 3000,
    "horas_extras" => 5
  ],
  [
    "nome" => "Sérgio",
    "salario_base" => 2800,
    "horas_extras" => 8 
  ],
  [
    "nome" => "Vanessa",
    "salario_base" => 3200,
    "horas_extras" => 12
  ],
  [
    "nome" => "André",
    "salario_base" => 1700,
    "horas_extras" => "Não tem"
  ]

];

function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra) {

  if (!is_float($horasExtras)) {
    return $salarioBase;
  }

  $salarioTotal = $salarioBase + ($horasExtras * $valorHoraExtra);
  return $salarioTotal;

}

function listarFuncionarios ($funcionarios) {

  echo "LISTANDO FUNCIONÁRIOS\n";

  foreach ($funcionarios as $funcionarioIndice => $funcionario) {

    $nome = $funcionarios[$funcionarioIndice]["nome"];
    $salarioBase = $funcionarios[$funcionarioIndice]["salario_base"];
    $horasExtras = $funcionarios[$funcionarioIndice]["horas_extras"];

    echo "Nome: " . $nome . "\n";
    echo "Salário base: " . $salarioBase . "\n";
    echo "Horas extras: " . $horasExtras . "\n";
    echo "Salário total: " . calcularSalarioTotal ($salarioBase, $horasExtras, $salarioBase * 1.5) . "\n";
  }
}

listarFuncionarios ($funcionarios);