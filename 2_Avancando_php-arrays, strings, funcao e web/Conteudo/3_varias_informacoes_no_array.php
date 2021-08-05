<?php

// Aqui estamos criando um array com diversos tipos de dados (ex.: string, double, float, int, etc.) e o nome disso é array associativo.

// Aqui criamos uma lista com informações diversas. Por padrão, o PHP define os índices iniciando do 0 e tal, mas nesse caso, nós definimos a chave (ou índice) com nomes. Ex.: o local que vai abrigar o nome do titular, defini o nome como 'titular'. O local que vai abrigar o saldo do titular, defini como saldo, e assim sucessivamente. É IMPORTANTÍSSIMO seguir essa sintaxe.

$conta1 = [
  'titular' => 'Letícia',
  'saldo' => 1000
];

$conta2 = [
  'titular' => 'Saulo',
  'saldo' => 10000
];

$conta3 = [
  'titular' => 'Ana',
  'saldo' => 12000
];

// Para chamar um índice específico, ao invés de colocarmos ex.: $variavel[0], colocamos o nome que demos para o índice.

echo $conta1['titular'] . PHP_EOL;
echo $conta2['titular'] . PHP_EOL;
echo $conta3['titular'] . PHP_EOL;

// Aqui temos um array de arrays, levando bem ao pé da letra.
$contasCorrentes = [$conta1, $conta2, $conta3];

// Aqui estamos dizendo que os nomes dos titulares serão exibidos até o último.
// Nesse caso, quando queremos exibir apenas um valor dos arrays (tipo, nessa situação só quero mostrar os nomes dos titulares das contas), especificamos, logo após a variável de inicialização a chave do campo que queremos mostrar.
for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}