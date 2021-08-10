<?php

$contasCorrentes = [
  '324.567.895-9' => [
    'titular' => 'Letícia',
    'saldo' => 18000
  ], 
  '324.504.898-1' => [
    'titular' => 'Saulo',
    'saldo' => 10000
  ], 
  '320.167.890-7' => [
    'titular' => 'Ana',
    'saldo' => 12000
  ]
];

if(500 > $contasCorrentes['324.567.895-9']['saldo']) {
  echo "Você não pode sacar esse valor da tua conta, mermão!" . PHP_EOL;
} else {
  $contasCorrentes['324.567.895-9']['saldo'] -= 500;
}





foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular']. " " .['saldo'] . PHP_EOL;
}