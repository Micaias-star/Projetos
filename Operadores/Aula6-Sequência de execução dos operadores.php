<?php

//$Resultado = (10 * 3) / 2 > 5 && 10 + 5 < 3; // && é um "e" em lógica de programação. Para ser verdadeiro, os dois valores precisam ser verdadeiros.

//$Resultado2 = 4 - 5 > 5 || 5 - 5 <5; // || ou or (ou) Para ser verdadeiro, basta uma das informações ser verdadeiras.

//$Resultado3 = (10 * 3) / 2 > 5 xor 10 + 5 < 3; 

//var_dump( $Resultado);

//echo "<br>";

//var_dump($Resultado2);

//echo "<br>";

//var_dump($resultado3);

$booleano1 = true;
$booleano2 = false;
$booleano3 = true;
 
if ($booleano1 and $booleano2) {
 
  echo "Verdadeiro";
 
} else {
 
  //Resultado é falso pois os valores das variáveis são diferentes
  echo "Falso"; 
 
}
 
if ($booleano1 or $booleano2) {
 
  //Resultado é verdadeiro pois uma das variáveis é verdadeira 
  echo "Verdadeiro"; 
   
} else {
 
  echo "Falso";
 
}
 
if ($booleano1 xor $booleano3) {
 
  echo "Verdadeiro";
 
} else {
   
  //Resultado é falso pois os valores de ambas as variáveis são verdadeiras
  echo "Falso"; 
 
}
 
if (!$booleano2) {
   
  //Resultado é verdadeiro pois o valor da variável é falso
  echo "Verdadeiro"; 
 
} else {
 
  echo "Falso";
 
}
 
if ($booleano1 && $booleano3) {
 
  //Resultado é verdadeiro pois ambos os valores das variáveis são verdadeiros
  echo "Verdadeiro"; 
 
} else {
 
  echo "Falso";
 
}
 
if (!$booleano1 || !$booleano3) {
 
  echo "Verdadeiro"; 
 
} else {
 
  //Resultado é falso, pois o valor de ambas as variáveis foram invertidas para falso
  echo "Falso"; 
   
}

?>