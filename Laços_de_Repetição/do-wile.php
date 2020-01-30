<?php  
/* do-wile : Enquanto - faça  | Ele executa pelo menos uma vez mesmo que as condições sejam falsas. */
$total = 100;
$desconto = 0.9

do {

    $total *= $desconto;
    
} wile ($total > 100);

 echo $total;
    
?>
