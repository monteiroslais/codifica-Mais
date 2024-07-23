<?php

function main (){

  $temperatura = get_input ("Digite o valor da temperatura.") . PHP_EOL;
  $unidade = get_input ("Digite a unidade de medida (C/F)") . PHP_EOL;
  $temperaturaConvertida = 0;

  if ($unidade == "c"){
    $temperaturaConvertida = ($temperatura * 9/5) + 32;
      echo "A temperatura em fahrenheit é: {$temperaturaConvertida} F" . PHP_EOL;
  }
  else ($unidade == "F"){
    $temperaturaConvertida = ($temperatura - 32) * 5/9;
      echo "A temperatura em Celsius é: {$temperaturaConvertida} C" . PHP_EOL;
  }
}
main ();