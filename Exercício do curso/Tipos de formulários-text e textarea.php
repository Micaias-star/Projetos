<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de um formulário</title>
</head>
<body>
	<form action= "" method="post">
    <input type="text" name="nome"><br>
    <input type="text" name="email"><br>
    <textarea name='mensagem'  cols='8' rows='3'> </textarea><br>  
	<input type="submit" >	
     

	</form>>

</body>
</html>>

<?php

echo "Olá " . $_POST["nome"] ." ".  " (email: " . $_POST["email"] . ") <br><br>";
echo "Sua mensagem: " . $_POST["mensagem"];
?>





?>