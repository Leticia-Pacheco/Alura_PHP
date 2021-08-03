<?php
/* Valores entre aspas simples são lidos como strings, enquanto valores entre aspas duplas podem ser interpretados.*/

$nome = "Larissa";
$idade = 21;
$notaBimestreUm = 9.8;
$notaBimestreDois = 9.9;

/* Primeiro jeito de concatenação.
   Neste método não importa se você usa aspas simples ou dupla,pois o php vai interpretar o que estiver dentro das aspas como texto e as variáveis que estão fora como variáveis. */

echo "Olá, eu sou " . $nome . ", tenho " . $idade . ", tirei " . $notaBimestreUm . " no primeiro bimestre da faculdade e " . $notaBimestreDois . " no segundo bimestre ;)." . PHP_EOL;


/* Segundo jeito de concatenação
   Neste método é importante usar aspas duplas para que o php entenda que, além de textos, também há variáveis para serem interpretadas. ;) */

echo "Olá, eu sou $nome, tenho $idade, tirei $notaBimestreUm no primeiro bimestre da faculdade e $notaBimestreDois no segundo bimestre ;).";

// Independente do modo, obteremos o mesmo resultado das duas formas.