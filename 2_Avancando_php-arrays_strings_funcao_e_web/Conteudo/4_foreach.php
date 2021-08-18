<?php

// Aqui copiamos o código da última aula (3_varias_informacoes_no_array.php).

/* Caso eu queira definir um índice para cada um dos elementos contidos no array $contasCorrentes, não precisaria mudar nada no foreach, ao contrário do for.
Independente do índice que definirmos, na hora de fazer o foreach não mudará nada. */
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

// foreach --> Para cada, ou seja, para cada array que está contido dentro da variável $contasCorrentes, ou seja, estou passando por cada conta corrente com uma variavel chamada $conta (quando o array for executado, a variável $conta será exibida, só que o valor dela será diferente dependendo do array que ela está passando. Ex.: no array 1, o nome do titular é Letícia, mas já no array 2, o nome do titular é Saulo. Então, essa variável muda de valor conforme vai passando). 

/* Descrevendo o que o código quer dizer:
   Para cada uma das contas correntes chamando cada uma delas de $conta, executa isso aqui, ou seja, mostra o nome do titular de cada conta. É isso que o foreach diz.
*/
foreach ($contasCorrentes as $conta) {
  echo $conta['titular'] . PHP_EOL;
}

// Caso a gente queira ter acesso à chave do elemento, fazemos da seguinte forma:

foreach ($contasCorrentes as $chave => $conta) {
  echo $chave . PHP_EOL;
}

/* O foreach traz o mesmo resultado que obtemos caso façamos o laço for:
for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}*/