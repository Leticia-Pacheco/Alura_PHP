<?php

$nome = "Larissa";
$idade = 21;
$notaBimestreUm = 9.8;
$notaBimestreDois = 9.9;
$aprovada = true;

echo gettype($nome) . PHP_EOL;
echo gettype($idade) . PHP_EOL;
echo gettype($notaBimestreUm) . PHP_EOL;
echo gettype($notaBimestreDois) . PHP_EOL;
echo gettype($aprovada);

//gettype serve para mostrar qual é o tipo da variável.
// PHP_EOL serve para pular uma linha.

/* TIPOS DE VARIÁVEIS
--> Int (Números inteiros. *ex.: 10*)
--> Double (Números decimais mais precisos. *ex.: 1,87923...*)
--> Float (Números decimais mais "simples". *ex.: 1,8*)
--> String (Textos. *ex.: "Hello, world!" *)
--> Boolean (Verdadeiro ou falso)
*/