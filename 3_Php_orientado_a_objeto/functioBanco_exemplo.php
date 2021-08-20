<?php
// Estamos trabalhando com dados explícitos aqui.

function criarConta(string $cpf, string $nomeTitular, float $saldo): array
{
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo,
        ]
    ];
}

/* No prompt você digitará: 
   $conta = ['123.456.789-10' => ['titular' => 'Vinicius', 'saldo' => 500]];
   $conta['123.456.789-10']['saldo'] -= 700;
   var_dump($conta);

   O var_dump serve para mostrar o conteúdo de uma variável. Ex.: se for um array, é mostrado todo estruturado e com seus dados.

   Novamente no terminal do seu sistema operacional, entre no terminal interativo do PHP (com php -a) e digite:

   require 'src/conta.php';
   $conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
   var_dump($conta); // Observe que a conta foi criada corretamente
   $conta['123.456.789-10']['saldo'] -= 700;
   var_dump($conta); // Verifique que uma nova conta foi criada de forma incorreta

   E, para fechar o terminal, digite quit.
*/