<?php

//PEÇA OS DADOS
$peso = get_input ("Digite o seu peso (kg): ");
$altura = get_input ("Digite a sua altura (m): ");

//CALCULE O IMC
$imc = number_format($peso / ($altura * $altura), 2, ",");

// DIVULGUE O IMC
echo "Resultado do seu IMC: {$imc}kg/m^2\n";

//DIVULGUE A CLASSIFICAÇÃO DO USUÁRIO
if ($imc < 18.5) {
  echo "Resultado da classificação: Magreza\n";
} 
else if ($imc >= 18.5 && $imc <= 24.9) {
  echo "Resultado da classificação: Normal\n";
} 
else if ($imc >= 25 && $imc <= 29.9) {
  echo "Resultado da classificação: Sobrepeso\n";
} 
else if ($imc >= 30 && $imc <= 34.9) {
  echo "Resultado da classificação: Obesidade grau I\n";
} 
else if ($imc >= 35 && $imc <= 39.9) {
  echo "Resultado da classificação: Obesidade grau II\n";
} 
else if ($imc > 40) {
  echo "Resultado da classificação: Obesidade grau III\n";
}