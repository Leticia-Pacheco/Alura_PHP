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
