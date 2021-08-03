<?php

// $contador = 1; --> Inicializando/definindo o valor do                          contador
//  $contador <= 15; --> A condição que fará com que o                               loopin continue
//  $contador += 1 --> Aqui definimos o que deve ser feito                         e, nesse caso, o contador, ao se                            repetir, vai adicionar 1 a cada um                          de seus processos.

/* $contador = $contador + 1 é o mesmo que 
   $contador += 1 e 
   $contador ++
*/

for($contador = 1; $contador <= 5; $contador = $contador + 1) {
  echo "#contador" . PHP.EOL;
}