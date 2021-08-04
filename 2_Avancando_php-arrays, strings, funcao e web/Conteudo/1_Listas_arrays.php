<?php

// Suponhamos que eu queira exibir a minha idade e a de alguns outros colegas

// Aqui fizemos um array/vetor, ou seja, uma lista. O PHP sabe o que é uma lista porque está entre  colchetes [].
$idadesList = [15, 17, 18, 20, 23, 27, 30];

// Aqui pegamos o índice (índice é a posição que um valor tem no array) para mostrar um valor específico. *Os índices começam no 0, ou seja, o primeiro valor está na posição 0, o segundoo valor está na posição 1, e assim sucessivamente.*
$primeiraIdade = $idadesList[2];

echo $primeiraIdade;