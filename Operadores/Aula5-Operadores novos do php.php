<?php
/* novos operadores que passaram a existir no php a partir da versão 7*/
 $a = 90;

 $b = 50;

 var_dump($a <=> $b)   

// <=> è um operador de comparação chamado de spaceship operator
/* Retorna 0 se os valores de ambos os lados são iguais.
   Retorna 1 se o valor à esquerda é maior.
   Retorna -1 se o valor à direita é maior   */
  //$a = NULL;

//  $b = NULL;

 // $c = 10;

 // var_dump ( $a??  $b ?? $c );   // ?? é um operador de comparação chamdo de Null Coalescing. Ele vai executando a sequência de variáveis até achar uma que exista, ou seja, uma que não seja nula

?>