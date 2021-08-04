<?php

$idadesList = [15, 17, 18, 20, 23, 27, 30];

// count serve para contar quantos elementos temos dentro de um array.
// Dentro dos parênteses do count, colocamos a variável que abriga o array.
for ($i = 0; $i < count($idadesList); $i++) {
  echo $idadesList[$i] . PHP_EOL;
}