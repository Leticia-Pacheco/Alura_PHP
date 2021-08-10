<?php

// O PHP só consegue trabalhar com chaves do tipo int ou string, qualquer outro tipo é convertido, o PHP vai tentar converter para inteiro ou string.

/* Ao exibir só o valor da chave 1, obtemos o a. Quando
   Quando exibimos o valor 1 e o valor '1', obtemos o b, pois nesse caso, o php entende que o 1 é 1 int, não string.
   Se exibimos o 1.5, o PHP sobrescreve novamente o último valor e exibe o 'c'.
   E, por último, se exibimos o true, ele também sobrescreve o último valor, pois o true é convertido para 1 (e se fosse false, seria convertido para 0).
*/

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
];

foreach($array as $item) {
  echo $item . PHP_EOL;
}