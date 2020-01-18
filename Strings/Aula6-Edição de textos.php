<?php

$nome = "Joao Rangel-Hcode";       

$nome = strtoupper ($nome);

echo $nome;                    //JOAO RANGEL-HCODE

$nome = strtolower ($nome);

echo "<br>";                  

echo $nome;                   //joao rangel-hcode

echo "<br>";

echo ucfirst($nome);          //Joao rangel-hcode

echo "<br>";

echo ucwords($nome);          //Joao Rangel-hcode

echo "<br>";

$nome = str_replace ("o", "0", $nome); 
$nome = str_replace ("e", "3", $nome); 

echo $nome                   //j0h0 rang3l-hc0d3



?>
