<?php

  $nome ="Micaias";
 $sobrenome = "Silva";
 $nomeCompleto = $nome . " " . $sobrenome; // Usa-se o . para concatenar as variáveis.

 echo $nomeCompleto;
 exit; //O php ira para de executar aqui
  
 unset($nome);          //Limpa os dados da variável
 if (isset($nome)){     
 	echo $nome;
 }                      // O comando isset a cima verifica se existe dados nas variável em questão

?>
