<?php

$contasCorrentes = [
  '324.567.895-9' => [
    'titular' => 'Letícia',
    'saldo' => 10000
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

// Até podemos fazer dessa forma, mas o trabalhão que vai dar não compensa. Suponhamos que a gente queira fazer esse processo de saque com todas as contas, teríamos que repetir diversas vezes. E se tivéssemos mais do que 3 contas? Não seria um código tão inteligente.

function exibeMensagem ($mensagem) {
  echo $mensagem . PHP_EOL;
}

if(500 > $contasCorrentes['324.567.895-9']['saldo']) {
  exibeMensagem("Você não pode sacar esse valor da tua conta, mermão!");
} else {
  $contasCorrentes['324.567.895-9']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular']. " " .$conta['saldo']);
}