<?php 
 //Não é possível criar uma constante array nas verções anteriores do php.; Por padrãos, as constantes sempre serão casae sensitive.
 define("BANCO_DE_DADOS", [
         '127.0.0.1',       //IP do servidor
         'root',           //Usuário
         'password',      //senha
         'test'          //nome do banco de dados

     ], true);    //para tornar a variável case insensitive, basta colocar o "true". Se eu fizer isso, não vai importar se eu chamar a constante com letras maiúsculas ou minúsculas.

 print_r (banco_de_dados); //exibe as informações de uma variável  



?>