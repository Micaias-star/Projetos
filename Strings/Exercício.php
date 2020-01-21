<?php

// substr ( string $string , int $start [, int $length ] ) 
/* Quando "start" for negativo, será "length" quem dira a quantidade de dado que vai aparecer */
$rest1 = substr("abcdef", -1);    // retorna "f"   
$rest2 = substr("abcdef", -2);    // retorna "ef"
$rest3 = substr("abcdef", -3, 1); // retorna "d"
$rest4 = substr("abcdef", 0, -1);  // retorna "abcde"
$rest5 = substr("abcdef", 2, -1);  // retorna "cde"
$rest6 = substr("abcdef", 4, -4);  // retorna false
$rest7 = substr("abcdef", 3, -2); // retorna "de" //


echo $rest1;
echo "<br>";
echo $rest2;
echo "<br>";
echo $rest3;
echo "<br>";
echo $rest4;
echo "<br>";
echo $rest5;
echo "<br>";
echo $rest5;
echo "<br>";
echo $rest6;
echo "<br>";
echo $rest7;


?>