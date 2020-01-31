<?php
//decode = transforma array em Json
$pessoas = array ();

array_push ($pessoas, array ( "nome" => 'João',
                              'idade' => 20    ));

array_push ($pessoas, array ( 'nome' => "Micaias",
                               "idade"  => "23"));

echo json_encode($pessoas);    


?>