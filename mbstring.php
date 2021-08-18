<?php

$string = 'Teste de integração';

// strlen serve para contar o tamanho da string (igual o .lenght).

/* Se contarmos os caracteres da variável $string, há 28, mas o strlen retorna 30, pois, além dos caracteres comuns, os acentos e sinais "diferentes" também
   são contados, então, nesse caso, temos 30 caracteres.
   Para informar ao PHP que estamos trabalhando com strings multibytes, colocamos a extensão mb_ antes de escrever strlen().
   Ao fazer isso, o PHP não identifica esses caracteres e então, as letras que os recebem não ficam maiúsculas. Para deixá-las em letra maiúscula, colocamos a
   extensão mb_ antes de escrever strtoupper().
*/

echo mb_strlen($string) . PHP_EOL;
echo mb_strtoupper($string) . PHP_EOL;

/* Caso queira converter os caracteres especiais para símbolos, basta usar o mb_convert_encoding(nomeVariavelParaConverter, 'paraQualTabelaQueQueroConverter', 
   'deQualTabelaQueroConverter');

$converter = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $converter; */

/* Para colocar a primeira letra de cada palavra da string em maiúsculo, basta usar mb_convert_case($variavel, modoDeConversao)
   Nesse caso, o modo de conversão significa como queremos converter, ou seja, se quero tudo maiúsculo, minúscullo ou se ass primeiras 
   letras serão maiúsculas.*/
echo mb_convert_case($string, MB_CASE_TITLE);