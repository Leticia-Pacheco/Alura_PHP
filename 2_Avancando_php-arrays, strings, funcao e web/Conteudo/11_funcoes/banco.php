<?php

/* O include serve para chamar um arquivo que não seja tão importante, então, caso o caminho esteja errado, o erro só aparecerá no final das linhas de erros.
include 'funcoes.php';*/

/* O require é especificamente para esse arquivo, ou seja, se o caminho estiver errado, ele já traz o erro na primeira linha de erros. Porém, se o caminho 
estiver especificado duas vezes, dará erro fatal. */
// require 'funcoes.php';

// O require_once verifica se o caminho está correto e se só foi declarado uma vez.
require_once 'funcoes.php';

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

$contasCorrentes['324.567.895-9'] = depositar(
    $contasCorrentes['324.567.895-9'], 900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
