<?php

$pessoas = array ();

array_push ($pessoas, array ( "nome" => 'João',
                              'idade' => 20    ));

array_push ($pessoas, array ( 'nome' => "Micaias",
                               "idade"  => "23"));

print_r ($pessoas [0]["nome"]);   //esse comando imprime arrays   // o primeiro número corresponde ao índex. Já o segundo, corresponde a chave do array
 

?>