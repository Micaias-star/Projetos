<?php

  $nome ="Hcode";                                  //strings
  $site = 'www.hcode.com.br';                     //string
  $ano  =  1998;                                 //Inteiro
  $salario = 5500.99;                           //Ponto flutuante
  $bloqueado = false;                          //Booleano
  ///////////////////////////////
  $frutas = array("abacaxi", "Laranja");     //array
 //cho $frutas[1];

  $nascimento = new DateTime();             //Objeto
//var_dump($nascimento);                 // Coloquei esse comando para comprovar visualmente o tipo de dados
/////////////////////////////////
  $arquivo = fopen ("1.png","r");     //Variável do tipo resource
  var_dump($arquivo);
//$nulo = null                       //Variável nula, ou seja não tem valor, não tem um espaço reservado na memória.
//$vazio =""                     //vazio, ou seja, tem espaço reservado na memória, mas não há nenhuma informação.
?>
