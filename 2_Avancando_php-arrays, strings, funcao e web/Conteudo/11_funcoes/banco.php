<?php

// Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue.

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
    $contasCorrentes['324.567.895-9'],
    900
);

// A função (ou construção de linguagem) unset exclui uma variável da memória.
unset($contasCorrentes['324.567.895-9']);

titularLetrasMaiusculas($contasCorrentes['320.167.890-7']);

/* Como queremos exibir uma lista, estou abrindo ela aqui
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    Ao invés de fazermos todo o código ali de baixo, chamamos apenas a function exibeConta, que traz todos os dados das contas e já formatados.
    exibeConta($conta);


    Às vezes precisamos pegar valores específicos dos arrays, então podemos usar essa forma abaixo.
       Aqui estamos passando os dados através de uma lista. Podíamos passar dessa forma: list($contaLeticia, $contaSaulo, $contaAna) = $contasCorrentes caso não
       tivéssemos dado uma chave para cada um (que, nesse caso, é o CPF), ou seja, se o índice, por padrã, fosse numérico, que aí seria exibido na tela as contas
       em ordem (do 0 em diante).
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
     exibeMensagem(
       "$cpf $titular $saldo"
     );
    Para exibir de forma mais detalhada, usamos essa fórmula abaixo, mas assim, ali em cima fica uma forma mais enxuta e bonita de deixar no código.
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
echo "</ul>";
E fechando ela aqui.

Agora vamos colocar um código html dentro do PHP, então, para fechar o bloco de códigos do PHP, simplesmente colocamos ?>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <!-- Para não precisarmos de colocar a sintaxe do php(menor, interrogação e php), podemos apenas esncrever dessa forma (menor, php e igual). -->
        <?php foreach($contasCorrentes as $cpf => $conta) {?>
            <dt>
                <h3>Titular: <?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php }?>
    </dl>
</body>
</html>