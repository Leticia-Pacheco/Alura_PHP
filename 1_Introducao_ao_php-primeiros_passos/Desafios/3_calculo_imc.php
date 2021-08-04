<?php

$altura = 1.63;
$peso = 60;

$imc = $peso / ($altura **2);

if($imc < 18.5) {
  echo "Você está abaixo do peso.";
}

else if($imc >= 18.5 && $imc <= 24.9) {
  echo "Você está com o peso ideal.";
}

else if($imc >= 25 && $imc <= 29.9) {
  echo "Você está um pouquinho acima do peso.";
}

else if($imc >= 30 && $imc <= 39.9) {
  echo "Você está na obesidade grau I.";
}

else if($imc > 40) {
  echo "Você está na obesidade grau II.";
}