<?php

//foreach = para cada
$meses = array (" janeiro", "fevereiro", "março",
                  " abril", "maio", "junho",
                 " julho", "agosto", "setembro") ;

foreach ($meses as $index =>  $mes) {    //1º array; index do array; variável que será criada e armazenada os valores do arrray.

         echo "Índice:"  . $index. "<br>";
         echo "O mês é:" . $mes . "<br><br>";
}


?>