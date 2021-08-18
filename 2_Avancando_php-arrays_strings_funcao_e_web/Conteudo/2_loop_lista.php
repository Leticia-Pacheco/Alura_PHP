<?php

$idadesList = [15, 17, 18, 20, 23, 27, 30];

// count serve para contar quantos elementos temos dentro de um array.
// Dentro dos parênteses do count, colocamos a variável que abriga o array.
for ($i = 0; $i < count($idadesList); $i++) {
  echo $idadesList[$i] . PHP_EOL;
}

/* Explicação de como o array funciona:
   $i = 0; --> Estamos dizendo que ele vai ter sua inicialização no 0.

   $i < count($idadesList); --> Estamos dizendo que a variável $i vai rodar até que todos os elementos da $idadesList sejam mostrados. Ou seja, esse loopin vai se repetir até que a condição especificada nessa parte seja atingita que, nesse caso, é a variável de inicialização ser menor que a quantidade de valores que há na $idadesList.

   $i++ --> está dizendo que, a cada valor que passa, é acrescentado mais um, ou seja, na primeira exibição, aparece o 15, depois o 15 e i 17, e por aí vai.

   O resultado será:
   15
   17
   18
   20
   23
   27
   30
*/