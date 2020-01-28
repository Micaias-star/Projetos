<?php 


$frase =  "A repetição é a mãe da repetição";


$palavra = "mãe";

$q = strpos($frase, $palavra);  /* strpos(string alvo, palavra a ser encontrada ( aqui pode ser tanto uma variável que corresponda a palavra quanto a propria palavra = quantidade de bytes que corresponde a posição do início da palavra dentro da string)*/
 
echo $q;    

echo "<br>";


echo mb_strlen($frase); //quantidade de caracter

echo "<br>";

echo strlen($frase); // Quantidade de bytes 

echo "<br>";
$texto = substr($frase, 0, $q); // substr ( string alvo, de onde vai começar a procurar a executar, até que posição vai ser mostrada no navegador )
 
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // string alvo, onde começa ( nesse caso, eu não quero que comece na palavra mãe, quero que apareça "da repetição", então ou eu coloco $q +3 ou uso a função strlen (paravra a ser contada e somada), até que posição vai ser mostrada no navegador )  )

echo "<br>";

echo $texto2;

?>
