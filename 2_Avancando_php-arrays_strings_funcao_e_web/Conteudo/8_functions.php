<?php

// Nem sempre as functions precisam  de parâmetros, de vez em quando só queremos mostrar ou executar algo, então fazemos assim por ex.:

function helloWorld() {
  echo "Hello, world!";
}

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

// Para declararmos uma function devemos colocar entre parênteses os parâmetros (variáveis que usaremos dentro da function).

// Aqui estamos recebendo a conta (que, no caso, quando alguém chamar a função será trazido apenas o saldo pois está especificado na função que queremos apenas o saldo), que fica guardada na variável $conta e na variável $valorASacar é guardado o valor que queremos tirar daquela conta.

/* ROTINA/FUNÇÃO
   Uma função executa tudo que ela precisa dentro dela e retorna um valor, ela precisa ter o return $variavel. */

function sacar ($conta, $valorASacar) {
  if($valorASacar > $conta['saldo']) {
  exibeMensagem("Você não pode sacar esse valor da tua conta, mermão!");
  } else {
    $conta['saldo'] -= $valorASacar;
  }

  return $conta;
}

/* SUBROTINA
   Uma sub rotina executa tudo que ela precisa dentro dela mas não devolve valor algum. */

function exibeMensagem ($mensagem) {
  echo $mensagem . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular']. " " .$conta['saldo']);
}

helloWorld();