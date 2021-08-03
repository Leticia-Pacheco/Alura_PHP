<?php

$altura = 1.63;
$peso = 65;

$imc = $altura / (peso **2);

if($imc < 18.5) {
  echo "Você está abaixo do peso.";
}

else if($imc >= 18.5 && <= 24.9) {
  echo "Você está com o peso ideal.";
}

else if($imc >= 25.0 && <= 29.9) {
  echo "Você está um pouquinho acima do peso.";
}

else if($imc >= 30.0 && <= 39.9) {
  echo "Você está na obesidade grau I.";
}

else if($imc > 40.0) {
  echo "Você está na obesidade grau II.";
}


// echo $imc;