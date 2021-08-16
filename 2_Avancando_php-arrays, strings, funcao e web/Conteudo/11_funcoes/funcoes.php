<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor da tua conta, mermão!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar)
{
    $conta['saldo'] += $valorADepositar;
    return $conta;
}

/* PASSANDO POR REFERÊNCIA OU POR VALOR

   Função encher copo

   • Quando passamos por valor, enchemos apenas o copo que foi passado por parâmetro, ou seja, a cópia, mas o copo original continua vazio.
   • Agora, se eu passo por referência, eu estou enviando uma referência a esse copo, ou seja, estou enviando o próprio copo. Então, quando eu encho dentro da
     função, o copo original também enche.
   
   Pontos positivos e negativos de passar por referência

   • A função terá total acesso à sua variável, a todo conteúdo. Talvez ela faça e modifique coisas que você nem precisa ou nem quer;
   • Nesse caso, não é necessário passar por referência pois estamos lidando com dados bancários, então, não é seguro.
   */

/* Se chamarmos na function apenas (array $conta), ao exibir na tela, não é mostrada nenhuma alteração pois estamos passando apenas uma cópia do valor já 
   definido da variável, então passamos junto dela um & (array &$conta), aí sim passamos exatamente a conta, não uma cópia dela, ou seja, toda modificação que
   for feita, será realizada. Quando passamos exatamente a conta, estamos dizendo que estamos passando o endereço que a variável está localizada na memória. */ 
function titularLetrasMaiusculas(array &$conta) {
    // mb_strtoupper serve para deixar todas as letras maiúsculas.
    // Caso você queira usar o PHP apnass compilado, sem ter que usar a extensão mb, use apenas strtoupper ao invés de mb_strtoupper.
    // Estamos chamando a função mb_strtoupper e passando o titular da conta como parâmetro.
    $conta['titular'] = strtoupper($conta['titular']);
}