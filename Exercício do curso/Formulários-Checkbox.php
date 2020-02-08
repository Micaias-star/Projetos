<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário com checkbox</title>
</head>
<body>
   <form action="" method="POST">
   	<p>Quais as frutas a seguir possuem vitamina C ?</p>
   	 <input type="checkbox" name="frutas"[] value="Laranja">Laranja<br>
     <input type="checkbox" name="frutas"[]value = "Uva" >uva<br>
     <input type="checkbox" name="frutas"[]value= "Pêra">Pêra<br>
     <input type="checkbox" name="frutas"[] value = "Limão">Limão<br>
     <input type="submit" value="Enviar">>

   </form>>
</body>
</html>
<?php

if (isset($_REQUEST['frutas'])){
	
	$f = $_REQUEST["frutas"];
    
 echo "As frutas que possuem o sabor azedo são". "" . $_REQUEST ["frutas"];

}else{

	echo "Não foi escolhido nenhuma fruta";
}




?>