<?php

// Aqui copiamos o código da última aula (3_varias_informacoes_no_array.php).

$contasCorrentes = [
  32456789 => [
    'titular' => 'Letícia',
    'saldo' => 1000
  ], 
  32450489 => [
    'titular' => 'Saulo',
    'saldo' => 10000
  ], 
  32016789 => [
    'titular' => 'Ana',
    'saldo' => 12000
  ]
];

// Para adicionar um índice novo depois de já ter definido alguns ali em cima
$contasCorrentes[01916789] = [
  'titular' => 'Mario',
  'saldo' => 1000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL;
}