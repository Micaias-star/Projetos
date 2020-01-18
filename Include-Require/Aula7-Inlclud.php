<?php

//include "inc/slave.php";  // aqui estou chamando o arquivo que contem a função de somar. Se a pasta estiver antes da pasta "inc", é só colocar "../inc/NomeDoArquivo", se for mais antes ainda "../../inc/NomeDoArquivo"

require_once"inc/slave.php"; //require_once iguinora erros de duas chamada
require_once"inc/slave.php";

$resultado = somar (10,20);

echo $resultado;

?>