<?php

if (isset($_POST ['campo1'])) $campo1 = $_POST ['campo1'];
echo $campo1;
/* No formulário a baixo, a palavra "input action" é o local onde fica como vai ser feito a requisição, se é via URl ou via script , por exemplo.
Já a palavra "method" será a forma como vai ser feito a requisição, se via _GET ou via _POST*/
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Minha primeira caulculadora</title>
</head>
<body>
	  <form action="" method="post">  
	  	<p><input type="text" name="campo1"> </p>
	  	<p><input type="submit" name="Enviar"> </p>
      	
	  </form>>

</body>
</html>>

<?php

(isset ($_GET['acao'])) ? $acao = $_GET ['acao'] : $acao = null ; //se não for iniciada a variável, ela receberá o valor nullo
if (isset ($_GET['id']))  $id = $_GET ['id'];

switch ($acao):
	case 'excluir':
		echo 'excluir um registro do banco de dados' . '  ' . $id;
		break;
	
	default:
		echo 'Nenhuma ação foi informada' ;
		break;
endswitch;

?>