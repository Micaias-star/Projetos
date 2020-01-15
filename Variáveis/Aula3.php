<?php

 $nome = (int)$_GET["a"];

   //var_dump ($nome);

 $ip = $_SERVER["REMOTE_ADDR"];

  //echo $ip;

 $ip = $_SERVER["SCRIPT_NAME"];

 //echo $ip;

 /*            Escopo de variável        */

 $nome ="Micaias";

 function teste(){
 	global $nome;
 	echo $nome;
 }
  function teste2 (){
  	$nome = "Micaias";
  	echo $nome. "agora estar no teste 2";

  }

 // teste();
//  teste2();


?>
