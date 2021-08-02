<?php

$nome = "Larissa";
$idade = 21;
$notaBimestreUm = 9.8;
$notaBimestreDois = 9.9;

// O \n (new line) serve para quebrar linha e a sequência de texto após ele (\n) vá para a linha de baixo.
echo "Oi! Eu sou $nome \ne tenho $idade anos.\n\n";


// O \t (tab ou tabulação) "empurra" a frase para frente formando a tabulação.
echo "\tOi! Eu sou $nome e tenho $idade anos.";


// O PHP_EOL (end of line) serve para quebrar linha em qualquer sistema operacional.
echo "Oi! Eu sou $nome" . PHP_EOL . "e tenho $idade anos.";