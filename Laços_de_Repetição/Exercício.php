<?php
// fo ( começo ( 2020); enquanto $i for maior que 2020 - date ("Y") - decremente -1)
//for ($i = date ("Y"); $i > date ("Y") -100; $i--){

//	echo $i . "<br>";
//}

echo "<select>";
for ($i = date ("Y"); $i >= date ("Y") -100; $i--){
	echo '<option value="' . $i . '">  ' . $i . '</option>'; // option value = "valor que entrarar nos registros e valor que será exibido no navegador /sintaxe: '<option value = "xxxxx">'  xxxxx   '</option>'

}
echo "</select>"







?>