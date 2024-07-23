<?php

// REVISAR

$notasAlunos = [
  [8.5, 6.0, 7.8, 9.2, 5.5],  // Aluno 1
  [7.0, 8.0, 6.5, 7.5, 8.5],  // Aluno 2
  [6.5, 7.5, 4.5, 5.5, 7.0],  // Aluno 3
  [5.0, 4.6, 7.8, 9.0, 6.0]   // Aluno 4
];

function calcularMedia($notas) {
  $mediaAlunos = [];
  foreach ($notas as $notaAluno) {
    $mediaAluno = array_sum($notaAluno) / count($notaAluno); 
    array_push($mediaAlunos, $mediaAluno);
  }
  return $mediaAlunos;
}

$medias = calcularMedia($notasAlunos);

foreach ($medias as $aluno => $media) {
  $aluno = $aluno + 1;
  if ($media < 7.0) {
    echo "Aluno: {$aluno}\n";
    echo "Situação: Reprovado\n";
    echo "Média: {$media}\n\n";
  } 
  else {
    echo "Aluno: {$aluno}\n";
    echo "Situação: Aprovado\n";
    echo "Média: {$media}\n\n";
  }
}

















