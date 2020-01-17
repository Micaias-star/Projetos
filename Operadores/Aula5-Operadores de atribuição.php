<?php

$nome = "Hcode"; // = Operador que atribui um valor a variável

// echo $nome . "Teste";  // . é um operador que permite a concatenação de uma variável.


$nome .= "Teste"; // .= é um operador que soma o dado da variável em questão com o texto que estar na frente, fazendo com que a variável receba os dois dados.
//echo $nome;

$valorTotal = 0;

$valorTotal += 100;    // sig que o valor 100 será somado com o dado da variável e será colocado dentro dela.

$valorTotal += 25;

$valorTotal -= 10; 

$valorTotal *= .1; // reduzirar a soma das variáveis anteriores em 10 %

// += é um operador que soma o que estar na variável com o número que estar na frente. -= subtrai o dado da variável.

echo $valorTotal;
 

?>