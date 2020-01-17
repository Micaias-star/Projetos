<?php

$nome = "Joao Rangel-Hcode";       

$nome = strtoupper ($nome);

echo $nome;

$nome = strtolower ($nome);

echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome);

echo "<br>";

echo ucwords($nome);

echo "<br>";

$nome = str_replace ("o", "0", $nome); 
$nome = str_replace ("e", "3", $nome); 

echo $nome



?>