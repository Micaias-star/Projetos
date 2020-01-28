<form>       
	                 
	 
	  <input type= "text" name="nome">      
	  <input type="date" name="Nascimento">
	  <input type= submit value="ok">  

</form>
<?php     // A tag <form> siguinifica formulários . Ver mais sobre isso em https://www.devmedia.com.br/php-forms-manipulando-dados-de-formularios/29392
if (isset ($_GET)){    // vai ser get porque não foi definido a palavra method na tag <form>. Ele chama os códigos anteriores  // isset é usado para vericifar qual o valor inserido na variável.
   foreach ($_GET as $key => $value) {                      //$key = chave do array = nome dos inputs// Ou seja, para cada Key, crie uma variável $value e armazene os valores do input

   	echo "Nome do campo:" . $key . "<br>";  // nome
   	
   	echo "valor do campo: " . $value;      // n idade

   	echo "<hr>"; ///escreve uma linha a cada execução
   }

}  /*           Exemplo de foreach com coleções        */
?>    