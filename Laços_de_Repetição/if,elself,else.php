<?php

$qualASuaIdade = 30;
$idadeCriança = 12;
$idademaior = 18 ;
$idadeMelhor = 65 ; 

//if = se  ; else = senão ; ? = então ; : = senão
if ($qualASuaIdade < $idadeCriança){ 

	echo "Você é uma criança";

}else if ($qualASuaIdade < $idademaior){

   echo "Você é um adolescente";

}else if ($qualASuaIdade < $idadeMelhor){

	echo "Você é um adulto";
}else {
	echo "Você é um idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idademaior)? "Menor de Idade" : "Maior de Idade";



?>