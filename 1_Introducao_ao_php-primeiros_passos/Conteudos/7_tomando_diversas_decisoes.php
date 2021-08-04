<?php

$idade = 19;
$numeroPessoas = 2;

echo "Você só pode entrar se tiver mais de 18 anos ou a partir de 16 acompanhado.";

// if = se tal coisa for verdadeira, execute isso
if($idade >= 18 && $nome == "Letícia") {
  echo "Você é maior de idade, pode entrar sozinho.";
}

// else = caso contrário, execute isso aqui
else if($idade >= 16 && $numeroPessoas > 1){
    echo "Você tem $idade anos e está acompanhado(a). Pode entrar.";
  }
else {
  echo "Hmm... Você é menor de idade, ainda tem $idade, não pode entrar!";
}