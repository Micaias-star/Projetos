<?php
// for (Onde ele começa contar ; Termo condicional final, soma 5 na variável $i em cada repetição )
for ($i = 0; $i < 1000; $i+=5){

	if ( $i > 200 && $i < 800 ) continue ;
	if ($i === 900) break;

	echo $i . "<br>";
}








?>
