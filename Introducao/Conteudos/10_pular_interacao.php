<?php
// Neste código aprenderemos como pular uma interação dependendo de uma condição.

// continue --> Após cumprir uma condição, o looping continua.
// break --> Após cumpriruma condição, o looping para.

for ($contador = 1; $contador <= 15; $contador++) {
  if($contador == 13) {
    continue;
  }
    echo "#$contador" . PHP_EOL;
}