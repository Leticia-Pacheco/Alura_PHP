<?php

// A classe é uma estrutura ou esqueleto que abstrai um conjunto de objetos contendo características similares. Uma determinada 
// classe define o comportamento de seus objetos usando métodos e modificando seus estados como os atributos.
class Conta {
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacar (float $valorASacar) 
    {
        if($valorASacar > $this->saldo) {
            echo "Não é possível sacar.";
        }
        else {
            $this->saldo -= $valorASacar;
        }
    }
}

/* Caso eu queira fazer uma função dentro dessa classe é possível sim. Caso faça uma e não especifique que ela é pública, o PHP automaticamente entende
   que ela é pública, mas é sempre bom fazer um código explícito. */

/* Para instanciar essa class fazemos dessa forma: $novaConta = new Conta();
   Objeto é o que a classe retorna. */

/* No powershell interativo do PHP

   require 'nomeArquivoDaClasse.php';
   $contaUm = new Conta(); --> Aqui estamos instanciando a classe, ou seja, estamos dizendo que a variável $contaUm vai receber uma nova conta.
   $contaUm->cpfTitular = '123.456.789-10'; --> Aqui estamos dizendo que o cpf do titular da $contaUm é 123.456.789-10.
   $contaUm->nomeTitular = 'Letícia Pacheco'; --> Aqui estamos dizendo que o nome do titular da $contaUm é Letícia Pacheco.
   $contaUm->saldoTitular = 1000; --> Por fim, estamos dizendo que o titular da $contaUm tem 1000 de saldo.
   var_dump($contaUm); --> Aqui estamos mostrando o valor guardado na variável e seu tipo.
*/